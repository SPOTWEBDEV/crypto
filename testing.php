<?php
// CoinMarketCap API Key (replace with your own)
$apiKey = "1312f57d-3307-4c2b-bd94-9850caf54b40";

// Cryptocurrency symbol (e.g., Bitcoin)
$symbol = "BTC"; // You can change this based on your needs
$currency = "USD"; // You can change this based on your needs

// API URL
$url = "https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest?symbol={$symbol}&convert={$currency}";

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "X-CMC_PRO_API_KEY: $apiKey",
    "Accept: application/json"
]);

// Execute cURL request and get the response
$response = curl_exec($ch);

// Close cURL session
curl_close($ch);

// Check for any errors
if ($response === false) {
    echo json_encode(["error" => "Failed to fetch data from CoinMarketCap"]);
    exit;
}

// Decode the JSON response from CoinMarketCap
$data = json_decode($response, true);

// Check if the data exists for the given symbol and currency
if (isset($data['data'][$symbol]['quote'][$currency]['price'])) {
    // Get the price
    $price = $data['data'][$symbol]['quote'][$currency]['price'];
    echo json_encode(["price" => $price]);
} else {
    echo json_encode(["error" => "Invalid response or symbol not found"]);
}
?>
