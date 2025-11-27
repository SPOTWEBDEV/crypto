<?php

include '../connection.php';
$user_id = $_SESSION['id']; // make sure user is logged in

// Fetch user mining capitals
$user = mysqli_fetch_assoc(mysqli_query($connection, "SELECT mining_capital_btc, mining_capital_gold , mining_profit_btc , mining_profit_gold FROM users WHERE id='$user_id'"));

$btc_profit_per_minute = $user['mining_profit_btc'];
$gold_profit_per_minute = $user['mining_profit_gold'];
$mining_capital_btc = $user['mining_capital_btc'];
$mining_capital_gold = $user['mining_capital_gold'];

header('Content-Type: application/json');
echo json_encode([
    'btc-profit' => $btc_profit_per_minute,
    'gold-profit' => $gold_profit_per_minute,
    'mining-capital-btc' => $mining_capital_btc,
    'mining-capital-gold' => $mining_capital_gold
]);
?>
