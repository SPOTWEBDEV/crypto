<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


function checkUrlProtocol($url)
{
    // Parse the URL to get the scheme
    $parsedUrl = parse_url($url);

    // Check if the scheme exists and if it's http or https
    if (isset($parsedUrl['scheme'])) {
        return $parsedUrl['scheme'];
    } else {
        return 'invalid'; // Invalid URL if no scheme is found
    }
}

// Automatically get the current URL
$currentUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http")
    . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Get the protocol from the current URL
$request = checkUrlProtocol($currentUrl);

// Default configurations
define("HOST", "localhost");


// Set configurations based on protocol
if ($request == 'https') {
    $domain = "https://fusionsassets.com/";
    define("USER", "tifkvkth_crypto");
    define("PASSWORD", "tifkvkth_crypto");
    define("DATABASE", "tifkvkth_crypto");
}
elseif ($request == 'http') {
    $domain = "http://localhost/crypto/";
    define("USER", "root");
    define("PASSWORD", "");
    define("DATABASE", "jay");
}

// // Database connection
$connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}




$apiKey = "1312f57d-3307-4c2b-bd94-9850caf54b40";









// Fetch all pending trades
$query = mysqli_query($connection, "SELECT * FROM trade WHERE status = 'pending'");

if (!$query) {
    die("Database query failed: " . mysqli_error($connection));
}

while ($trade = mysqli_fetch_assoc($query)) {
    $trade_id = $trade['id'];
    $pair = strtoupper(trim($trade['pair']));
    $order_type = $trade['order_type'];
    $stop_loss = $trade['stop_loss'];
    $take_profit = $trade['take_profit'];
    $entry_price = $trade['entry_price'];
    $amount = $trade['amount'];
    $total_profit = $trade['total_profit'];

    $pair_parts = explode("-", $pair);
    $base_currency = $pair_parts[0];
    $quote_currency = $pair_parts[1];

    $url = "https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest?symbol={$base_currency}&convert={$quote_currency}";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "X-CMC_PRO_API_KEY: $apiKey",
        "Accept: application/json"
    ]);

    $response = curl_exec($ch);
    curl_close($ch);

    if ($response === false) {
        echo "Failed to fetch price for $pair. Skipping...\n";
        continue;
    }

    $data = json_decode($response, true);

    if (!isset($data['data'][$base_currency]['quote'][$quote_currency]['price'])) {
        echo "Price data not found for $pair. Skipping...\n";
        continue;
    }

    $current_price = $data['data'][$base_currency]['quote'][$quote_currency]['price'];

    $profit = 0;
    $status = 'pending';

    if ($order_type === 'buy') {
        if ($current_price <= $stop_loss) {
            $profit = -$total_profit;
            $status = 'stoploss';
        } elseif ($current_price >= $take_profit) {
            $profit = $total_profit;
            $status = 'take_profit';
        } else {
            // Calculate profit or loss proportionally
            if ($current_price < $entry_price) {
                $loss_progress = ($entry_price - $current_price) / ($entry_price - $stop_loss);
                $profit = -min($loss_progress * $total_profit, $total_profit);
            } else {
                $profit_progress = ($current_price - $entry_price) / ($take_profit - $entry_price);
                $profit = min($profit_progress * $total_profit, $total_profit);
            }
        }
    } else { // Sell order
        if ($current_price >= $stop_loss) {
            $profit = -$total_profit;
            $status = 'stoploss';
        } elseif ($current_price <= $take_profit) {
            $profit = $total_profit;
            $status = 'take_profit';
        } else {
            if ($current_price > $entry_price) {
                $loss_progress = ($current_price - $entry_price) / ($stop_loss - $entry_price);
                $profit = -min($loss_progress * $total_profit, $total_profit);
            } else {
                $profit_progress = ($entry_price - $current_price) / ($entry_price - $take_profit);
                $profit = min($profit_progress * $total_profit, $total_profit);
            }
        }
    }

    // Update the database with the calculated profit and status
    $update_query = mysqli_query($connection, "UPDATE trade SET current_price_made = '$profit', status = '$status' WHERE id = '$trade_id'");

    if ($update_query) {
        echo "Trade ID $trade_id updated with profit $profit and status '$status'.\n";
    } else {
        echo "Failed to update Trade ID $trade_id: " . mysqli_error($connection) . "\n";
    }
}
?>
