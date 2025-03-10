<?php
require './server/connection.php'; // Include your database connection file

// CoinMarketCap API Key
$apiKey = "1312f57d-3307-4c2b-bd94-9850caf54b40";


// Fetch all pending trades
$query = mysqli_query($connection, "SELECT id, pair, stop_loss, take_profit FROM trade WHERE status = 'pending'");

if (!$query) {
    die("Database query failed: " . mysqli_error($connection));
}


// Loop through each trade
while ($trade = mysqli_fetch_assoc($query)) {
    $trade_id = $trade['id'];
    $symbol = strtoupper(trim($trade['pair'])); // Get the pair directly
    $stop_loss = $trade['stop_loss'];
    $take_profit = $trade['take_profit'];


    $pair_parts = explode("-", $symbol); // Splitting at the dash

    $base_currency = $pair_parts[0]; // ETH
    $quote_currency = $pair_parts[1]; // USDT

    




    // CoinMarketCap API URL
    $url = "https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest?symbol={$base_currency}&convert={$quote_currency}";

    // Initialize cURL session
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "X-CMC_PRO_API_KEY: $apiKey",
        "Accept: application/json"
    ]);

    // Execute cURL request
    $response = curl_exec($ch);
    curl_close($ch);

   

    // Check for errors
    if ($response === false) {
        echo "Failed to fetch price for $symbol. Skipping...\n";
        continue;
    }

    // // Decode the JSON response
    $data = json_decode($response, true);


    
    

    // // Check if price exists
    if (!isset($data['data'][$base_currency]['quote'][$quote_currency]['price'])) {
        echo "Price data not found for $symbol. Skipping...\n";
        continue;
    }

  

   
 

    // // Get the latest price
    $current_price = $data['data'][$base_currency]['quote'][$quote_currency]['price'];

    echo $current_price;

    

    // Check stop loss or take profit conditions
    if ($current_price <= $stop_loss) {
        $status = "loss";
    } elseif ($current_price >= $take_profit) {
        $status = "won";
    } else {
        continue; // Skip updating if no condition is met
    }

    // Update trade status in the database
    $update_query = mysqli_query($connection, "UPDATE trade SET status = '$status' WHERE id = '$trade_id'");

    if ($update_query) {
        echo "Trade ID $trade_id updated to '$status'.\n";
    } else {
        echo "Failed to update Trade ID $trade_id: " . mysqli_error($connection) . "\n";
    }
}
