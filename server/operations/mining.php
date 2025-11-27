<?php

define("HOST", "localhost");
define("USER", "tifkvkth_crypto");
define("PASSWORD", "tifkvkth_crypto");
define("DATABASE", "tifkvkth_crypto");

// Fetch all users with mining capital > 0
$result = mysqli_query($connection, "SELECT * FROM users WHERE mining_capital_btc > 0 OR mining_capital_gold > 0");

while ($user = mysqli_fetch_assoc($result)) {

    $user_id = $user['id'];

    // BTC Profit
    if ($user['mining_capital_btc'] > 0) {
        $mining_profit_btc = $user['mining_profit_btc'];

        $query  = mysqli_query($connection , "UPDATE users SET mining_profit_btc = mining_profit_btc + $mining_profit_btc WHERE id = '$user_id'");

        if($query){
            echo "BTC Profit Updated for User ID: " . $user_id . "\n";
        } else {
            echo "Error updating BTC Profit for User ID: " . $user_id . "\n";
        }
        
    }

    // Gold Profit
    if ($user['mining_capital_gold'] > 0) {
       $mining_profit_gold = $user['mining_profit_gold'];

        $query  = mysqli_query($connection , "UPDATE users SET mining_profit_gold = mining_profit_gold + $mining_profit_gold WHERE id = '$user_id'");

        if($query){
            echo "Gold Profit Updated for User ID: " . $user_id . "\n";
        } else {
            echo "Error updating Gold Profit for User ID: " . $user_id . "\n";
        }


    }
}



?>