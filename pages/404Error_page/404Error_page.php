<?php
// --- 404 logging setup ---

/* Many servers (especially remote ones or local dev setups) are set to UTC by default.
 To fix this issue I'll set manually the timezone in which PHP should process the data*/
// Set correct timezone
date_default_timezone_set('Europe/Amsterdam');

// Definition of the log folder and file path for storing of Log entries
$logFolder = __DIR__ . '/../../logs';
$logFile = $logFolder . '/404_errors.log';

// Create the folder if it does not exist
if (!is_dir($logFolder)) {
    mkdir($logFolder, 0755, true);
}

// Collect useful request information
$missingPage = $_SERVER['REQUEST_URI'] ?? 'Unknown page';
$ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown IP';
$date = date('d-m-Y H:i:s');

// Format the log entry
$logEntry = "$date | $ip | $missingPage" . PHP_EOL;

// Append the log entry to the file safely (using lock to prevent conflicts)
file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);

// --- Limit log file to 100 entries ---

$maxLines = 100;
$logContent = file($logFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// If there are more than 100 lines, keep only the most recent entries
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
    <!-- Unique favicon for 404 Error Page -->
    <link rel="icon" type="image/x-icon" href="../../assets/ErrorPage_assets/X_icon.png">
</head>

<body>


    <div class="MainContent">

        <div class="leftContent">

            <!-- This heading is displayed only on mobile devices. 
                    On desktop screens, it is replaced by the “Not” span 
                    and the “sockErrorText” div for better layout control. -->
            <h1 class="mobileTitle">Sock <span id="not">Not</span> Found</h1>

            <div class="imageWrapper">

                <!-- Container for the red frame, main 404 washing machine image, 
                        and the yellow background box underneath them. -->
                <div class="redBox"></div>
                <img src="../../assets/ErrorPage_assets/404 Washing Image.png" alt="Washing Machine 404 Error">
                <div class="yellowBox"></div>

                <!-- Text elements aligned visually with the images above. 
                        “Not” is separated from “sockErrorText” to allow distinct positioning in the design. -->
                <span class="not">Not</span>
                <div class="sockErrorText">
                    <span class="sock">Sock</span>
                    <span class="found">Found</span>
                </div>

            </div>

            <!-- Main 404 message displayed to users, including a link 
                    that redirects them back to the Home Page.-->
            <div class="textBox">
                <p>
                    Oops! Looks like you’ve lost your sole-mate. Don’t worry we’ve got plenty of
                    <a href="../home_page/home.php" class="homeLink">bright new options</a>
                    waiting for you. Find your perfect pair… unless your washing machine strikes again!
                </p>
            </div>

        </div>

    </div>



    <!-- The following sections (wave, bottomImages, and blueBackground) are placed outside the <main> element 
        so they can be fixed to the bottom of the page without interfering with the main layout. 
         This separation also simplifies maintenance or future updates to the decorative elements. -->

    <div class="bottomImages">
        <img src="../../assets/ErrorPage_assets/Sock Jumping.png" alt="Sock Jumping">
        <img src="../../assets/ErrorPage_assets/Evil Machine In An Island.png" alt="Evil Machine In An Island">
    </div>

    <div class="wave">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none">
            <path d="M0.00,49.98 C150.00,150.00 350.00,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"></path>
        </svg>
        <svg viewBox="0 0 500 150" preserveAspectRatio="none">
            <path d="M0.00,49.98 C150.00,150.00 350.00,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"></path>
        </svg>
    </div>

    <!-- Blue background acts as a visual continuation of the animated wave 
        on mobile screens, filling the space below when vertical height increases. -->
    <div class="blueBackground"></div>

</body>

</html>