<?php
// --- 404 logging setup ---

// Define the log folder and file path
$logFolder = __DIR__ . '/../../logs';
$logFile = $logFolder . '/404_errors.log';

// If the folder doesn't exist, create it
if (!is_dir($logFolder)) {
    mkdir($logFolder, 0755, true);
}

// Collect useful information
$missingPage = $_SERVER['REQUEST_URI'] ?? 'Unknown page';
$ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown IP';
$date = date('Y-m-d H:i:s');

// Create the log message
$logEntry = "$date | $ip | $missingPage" . PHP_EOL;

// Write to log file safely (append mode)
file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);

// --- Limit log file to 100 entries ---
$maxLines = 100;
$logContent = file($logFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

if (count($logContent) > $maxLines) {
    $logContent = array_slice($logContent, -$maxLines); // keep last 100
    file_put_contents($logFile, implode(PHP_EOL, $logContent) . PHP_EOL);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="404Error_page.css">
    <title>404 Error Page</title>
</head>

<body>
    <main>

        <div class="MainContent">

            <div class="leftContent">

                <h1 class="mobileTitle">Sock <span id="not">Not</span> Found</h1>

                <div class="imageWrapper">
                    <div class="redBox"></div>
                    <img src="../../assets/ErrorPage_assets/404 Washing Image.png" alt="Washing Machine 404 Error">
                    <div class="yellowBox"></div>
                    <span class="not">Not</span>
                    <div class="sockErrorText">
                        <span class="sock">Sock</span>
                        <span class="found">Found</span>
                    </div>
                </div>

                <div class="textBox">
                    <p>
                        Oops! Looks like you’ve lost your sole-mate. Don’t worry we’ve got plenty of bright new
                        options waiting for you. Find your perfect pair… unless your washing machine strikes again!
                    </p>
                </div>

            </div>
        </div>

    </main>

    <div class="bottomImages">
        <img src="../../assets/ErrorPage_assets/Sock Jumping.png" alt="Sock Jumping">
        <img src="../../assets/ErrorPage_assets/Evil Machine In An Island.png" alt="Evil Machine In An Island">
    </div>

    <div class="wave">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none">
            <path d="M0.00,49.98 C150.00,150.00 350.00,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"></path>
        </svg>
    </div>

    <div class="blueBackground"></div>

</body>

</html>