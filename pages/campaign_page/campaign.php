<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="campaign.css">
    <title>Campaign</title>
    <link rel="icon" type="image/x-icon" href="../../assets/illustraties/png/Sunny_socks_Green.png">

    <link rel="stylesheet" href="../../components/footer/footer.css">
    <link rel="stylesheet" href="../../components/footer/footer_green.css">

    <link rel="stylesheet" href="../../components/header/header.css">
    <link rel="stylesheet" href="../../components/header/header_going_green.css">
</head>
<body>
    <?php include '../../components/header/header.php'; ?>
    <main>

        <div class = "content">
            <div id = "bg">
                <img id = "leftleaves" src="img/Left Leaves.png" alt="leftleaves">
                <img id = "rightleaves" src="img/Right Leaves.png" alt="rightleaves">
                <div id = "bluesquare">
                    <img id = "plant" src="img/Plant.png" alt="plant">
                    <img id = "center" src="img/Image.png" alt="center">
                    
                </div>
            </div>
            
            
            <div id = "bluebg">
                <img id = "topglue" src="img/Top Glue.png" alt="topglue">
                <h1>Going Green</h1>
                <p>At Sunny Socks, we’ve always believed that socks should bring color, joy, and comfort to your day. Now, we’re stepping further—towards a greener future.Our Going Green campaign is about making choices that are better for the planet while keeping your feet happy.</p>
                <img id = "planet" src="img/Save the planet.png" alt="planet">
                <img id = "bottomglue" src="img/Bottom Glue.png" alt="bottomglue">
            </div>
            <div class="promise">
                <div id = "greybg1">
                    <img id = "plantbottom" src="img/Plant.png" alt="plantbottom">
                    <div id = "header1"><b>Our</b></div>
                    <div id = "header2"><b>Promise</b></div>
                </div>
                <div id = "greybg2"><p>Sunny Socks is more than just bold patterns and bright colors. With each pair, we’re weaving in responsibility and sustainability. This is just the beginning—we’ll continue finding better ways to reduce our footprint.</p></div>
                
                <?php
                $promises = [
                    ["img" => "img/Plastic recycling.png", "title" => "Organic &<br>Recycled<br>Materials"],
                    ["img" => "img/Factory.png", "title" => "Smarter<br>Production"],
                    ["img" => "img/Eco car.png", "title" => "Cleaner<br>Production"],
                    ["img" => "img/Sustainable.png", "title" => "Eco-Friendly<br>Packaging"]
                ];
                ?>
                <div class="promises">
                <?php foreach ($promises as $p): ?>
                    <div class="promise-item">
                    <img src="<?= $p['img'] ?>" alt="Promise image">
                    <h3><?= $p['title'] ?></h3>
                    </div>
                <?php endforeach; ?>
                </div>

                <img id = "leftbottomleaves" src="img/Left Bottom Leaf.png" alt="leftbottomleaves">
                <img id = "rightbottomleaves" src="img/Right Bottom Leaf.png" alt="rightbottomleaves">
                <div id = "slogan">Together<br>We can walk a little lighter on the planet.</div>
            </div>
        </div>
    </main>
    <?php include "../../components/footer/footer.php"; ?>
</body>
</html>