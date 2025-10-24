<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="../../assets/illustraties/png/Sunny_socks_Green.png">

    <link rel="stylesheet" href="../../components/footer/footer.css">
    <link rel="stylesheet" href="../../components/footer/footer_blue.css">

    <link rel="stylesheet" href="../../components/header/header.css">
    <link rel="stylesheet" href="../../components/header/header_blue.css">
</head>
<body>
    <?php include '../../components/header/header.php'; ?>
    <main>
        <div class="content">
            <div id = "greybg">
                <div id="smallyellowleft"></div>
                <img id="leftarrow1" src="img/Left Arrow 1.png" alt="left arrow 1">
                <img id="leftarrow2" src="img/Left Arrow 2.png" alt="left arrow 2">
                <img id="leftarrow3" src="img/Left Arrow 3.png" alt="left arrow 3">
                <div id = "bluesquare">
                    <img  src="img/main image.png" alt="main image">
                </div>
                <img id="rightarrow1" src="img/Left Arrow 1.png" alt="right arrow 1">
                <img id="rightarrow2" src="img/Left Arrow 2.png" alt="right arrow 2">
                <img id="rightarrow3" src="img/Left Arrow 3.png" alt="right arrow 3">
                <div id="smallyellowright"></div>
            </div>
            <div id = "bluebg">
                <h1>Ready to find socks that make you smile?</h1>
                <img  src="img/Sun Icon.png" alt="sun image">
                <h2>Then don’t lose time in buying your sole-mates!</h2>
                <a href="../product_page/product.html">
                    <div id="productbutton"></div>
                    <div id="productbuttoninside">
                        <h2>View Our Products!</h2>
                    </div>
                </a>
                <a href="../campaign_page/campaign.html">
                    <div id="campaignbutton"></div>
                    <div id="campaignbuttoninside">
                        <h2>Have a peek at our campaign!</h2>
                    </div>
                </a>
            </div>
            <div class="promise">
                <div id = "greybg1">
                    <img id = "bottomglue" src="img/Unifier.png" alt="bottomglue">
                    <h1>Why sunny?</h1>
                </div>
                <div id = "greybg2">
                    <h2>More than socks<br>We are a movement of <b>joy</b>,<br> <b>color</b> and <b>fairness</b></h2>
                    <a href="../about_us_page/about_us.html">
                        <div id="aboutusbutton"></div>
                        <div id="aboutusbuttoninside">
                        <h2>Read more</h2>
                        </div>
                    </a>
                </div>
                
                <div class="reasons">
                    <div>
                        <img src="img/Sock Icon.png" alt="plastic">
                        <h1>Comfortable</h1>
                        <h2>High-quality socks made for all-day happiness</h2>
                    </div>
                    <div>
                        <img src="img/Leaf Icon.png" alt="production">
                        <h1>Sustainable</h1>
                        <h2>Bright future, bright socks</h2>
                    </div>
                    <div>
                        <img src="img/Puzzle Icon.png" alt="ecocar">
                        <h1>Playful</h1>
                        <h2>Add color and joy to every outfit</h2>
                    </div>
                </div>
                
            </div>

        </div>
    </main>
    <?php include "../../components/footer/footer.php"; ?>
</body>
</html>