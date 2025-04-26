<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function checkUrlProtocol($url)
{
    $parsedUrl = parse_url($url);
    return isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : 'invalid';
}

// Automatically get the current URL
$currentUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http")
    . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Get the protocol from the current URL
$request = checkUrlProtocol($currentUrl);

// Default configurations
define("HOST", "localhost");

// Determine if online or offline
$isLocalhost = ($_SERVER['HTTP_HOST'] === 'localhost');

// Database connection (Only use one based on environment)
$connection = '';

if ($isLocalhost) {
    // Offline (Localhost)
    $domain = "http://localhost/crypto/";

    define("USER", "root");
    define("PASSWORD", "");
    define("DATABASE", "jay");

    // Database connection
    $connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
} else {
    // Online (Live Server)
    $domain = "https://fusionsassets.com/";

    define("USER", "fusionsa_crypto");
    define("PASSWORD", "fusionsa_crypto");
    define("DATABASE", "fusionsa_crypto");

    // Database connection
    $connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
}


// // Site configurations
$sitename = "Fusions Assets";


// email config 
$siteemail = "support@fusionsassets.com";
$emailpassword  = "support@fusionsassets.com";
$host = 'mail.fusionsassets.com';
$sitephone  = "+44 776 0957 798";
$siteaddress  = "weston newyork";



$apiKey = "1312f57d-3307-4c2b-bd94-9850caf54b40";



session_start();
