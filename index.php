<?php
// Get the server software information
$server = $_SERVER['SERVER_SOFTWARE'];
// Get the server IP address
$local_ip = $_SERVER['SERVER_ADDR'];
// Get the current date in YYYY-MM-DD format
$date = date("Y-m-d");
// Get the current time in HH:MM:SS format
$time = date("H:i:s");
// Get the current PHP version
$version = phpversion();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Web Server Information</title>
    <style>
        /* Basic page styles */
        body {
            font-family: sans-serif;
            background: #f9f9f9;
            padding: 40px;
            color: #333;
        }
        .card {
            background: #fff;
            padding: 30px;
            max-width: 500px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
        h1 {
            text-align: center;
        }
        .info {
            margin: 15px 0;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="card">
       <center> <h2>Hello from Kit</h2></center>
        <h1>Server information</h1>

        <!-- Display web server software info -->
        <div class="info"><strong>Web server:</strong> <?= htmlspecialchars($server) ?></div>
        <!-- Display current PHP version -->
        <div class="info"><strong>PHP-version:</strong> <?= htmlspecialchars($version) ?></div>
        <!-- Display server IP address -->
        <div class="info"><strong>IP-address:</strong> <?= htmlspecialchars($local_ip) ?></div>
        <!-- Display current date -->
        <div class="info"><strong>Date:</strong> <?= $date ?></div>
        <!-- Display current time -->
        <div class="info"><strong>Time:</strong> <?= $time ?></div>
        <!-- Link to GitHub profile -->
        <div class="info"><strong>My GitHub: </strong><a href="https://github.com/bigblackkit" target="_blank">bigblackkit</a></div>
    </div>
</body>
</html>
