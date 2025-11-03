<?php
$hour = (int)date('H');


if ($hour >= 5 && $hour < 12) {
    $logo = '../../assets/illustraties/png/Sunny_socks_Blue.png'; //morning
} elseif ($hour >= 12 && $hour < 17) {
    $logo = '../../assets/illustraties/png/Sunny_socks_Green.png'; //afternoon
} elseif ($hour >= 17 && $hour < 20) {
    $logo = '../../assets/illustraties/png/Sunny_socks_Orange.png'; //evening
} else {
    $logo = '../../assets/illustraties/png/Sunny_socks_Pink.png'; //night
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="about_us.css">
    <link rel="stylesheet" href="../chatbot/bot-icon/jummy.css">
    <title>About Us Page</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $logo; ?>">

    <link rel="stylesheet" href="../theme/darkmode.css">
    
    <link rel="stylesheet" href="../../components/footer/footer.css">
    <link rel="stylesheet" href="../../components/footer/footer_yellow.css">
    
    <link rel="stylesheet" href="../../components/header/header.css">
    <link rel="stylesheet" href="../../components/header/header_yellow.css">
    
</head>
<body>
    <?php include '../../components/header/header.php'; ?>
<main>
    <div class="mainbox">

        <!-- Top Grey Bar -->
        <div class="grey1"></div>

        <!-- Hero Circle -->
        <div class="hero">
            <img src="img/Hero.png" alt="Hero Image" class="img0">
        </div>

        <!-- Yellow Text -->
        <div class="yellowt">
            Socks are more than just something you put on your feet, they are little bursts of comfort and personality.
        </div>

        <!-- Grey Box 2: Mission -->
        
        <div class="grey2">
             <div class="arrow">
                <img src="img/Glue.png" alt="Arrow Image" class="img1">
            </div>
            <div class="mission-images">
               <img src="img/Mission Card.png" alt="Mission Card 1" class="img2">
               <img src="img/Hoover Mission Card.png" alt="" class="img22">
                <img src="img/Mission Card2.png" alt="Mission Card 2" class="img3">
                <img src="img/Hoover Mission Text.png" alt="" class="img33">
            </div>
        </div>

        <!-- Grey Box 3: Vision & Values -->
        <div class="grey3">
            <div class="vision-row1">
                <img src="img/Vision Card.png" alt="Vision Card" class="img4">
               <img src="img/Hoover Vision Text.png" alt="" class="img44">
                <img src="img/Vision Card2.png" alt="Vision Card 2" class="img5">
                <img src="img/Hoover Vision Card.png" alt="" class="img55">
            </div>


            <div class="vision-row2">
                <img src="img/Values Card.png" alt="Values Card 1" class="img6">
                <img src="img/Hoover Values Card.png" alt="" class="img66">
                <img src="img/Values Card1.png" alt="Values Card 2" class="img7">
                <img src="img/Hoover Values Text.png" alt="" class="img77">
            </div>
        </div>

        <!-- Last Text Section -->
        <div class="ltext">
            <p>We’re more than a socks company</p>
            <p>We’re a movement to bring joy, color, and fairness into everyday life.</p>
        </div>

    </div>

    <!-- Bot Icon -->
    <a href="../chatbot/chatbot.php" class="boticon">
        <img src="../chatbot/bot-icon/jummy.png" alt="Sunny Socks Logo">
    </a>

</main>


<script src="../theme/darkmode.js"></script>
<?php include '../../components/footer/footer.php'; ?>

</body>
</html>
