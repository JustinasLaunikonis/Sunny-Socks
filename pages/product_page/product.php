<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="product.css">
    <title>Product Overview</title>
    <link rel="icon" type="image/x-icon" href="../../assets/illustraties/png/Sunny_socks_Green.png">

    <link rel="stylesheet" href="../../components/footer/footer.css">
    <link rel="stylesheet" href="../../components/footer/footer_orange.css">

    <link rel="stylesheet" href="../../components/header/header.css">
    <link rel="stylesheet" href="../../components/header/header_orange.css">
</head>

<body>
    <?php include '../../components/header/header.php'; ?>
    <main>
        <div Class="MainContainer">

            <h1>Which team are you?</h1>

            <div class="content">

                <div class="Unicolor">

                    <div class="Uni_text">

                        <h2>Classic Unicolor</h2>
                        <p>For the fans of simplisity and love for our color palette designs</p>

                        <div class="color_buttons">

                            <!-- Blue Selector -->
                            <input type="radio" id="blue" name="button" checked>
                            <label for="blue" class="blue"></label>

                            <!-- Green Selector -->
                            <input type="radio" id="green" name="button">
                            <label for="green" class="green"></label>

                            <!-- Pink Selector -->
                            <input type="radio" id="pink" name="button">
                            <label for="pink" class="pink"></label>

                            <!-- Red Selector -->
                            <input type="radio" id="red" name="button">
                            <label for="red" class="red"></label>

                            <!-- Yellow Selector -->
                            <input type="radio" id="yellow" name="button">
                            <label for="yellow" class="yellow"></label>

                        </div>

                    </div>

                    <div class="Uni_imgs">

                        <!-- Main Images -->
                        <img class="uni_display uni_socks_blue"
                            src="../../assets/Photo's/catalogus/Sunny_socks_uni_blue.jpg" alt="Uni_Blue">
                        <img class="uni_display uni_socks_green"
                            src="../../assets/Photo's/catalogus/Sunny_socks_uni_green.jpg" alt="Uni_Green">
                        <img class="uni_display uni_socks_pink"
                            src="../../assets/Photo's/catalogus/Sunny_socks_uni_pink.jpg" alt="Uni_Pink">
                        <img class="uni_display uni_socks_red"
                            src="../../assets/Photo's/catalogus/Sunny_socks_uni_red.jpg" alt="Uni_Red">
                        <img class="uni_display uni_socks_yellow"
                            src="../../assets/Photo's/catalogus/Sunny_socks_uni_yellow.jpg" alt="Uni_Yellow">

                        <!-- Packaging Images -->
                        <img class="uni_packaging uni_blue"
                            src="../../assets/Photo's/packaging/png/catalogus_sokken_uni_blue.png"
                            alt="Uni_Blue_Packaging">
                        <img class="uni_packaging uni_green"
                            src="../../assets/Photo's/packaging/png/catalogus_sokken_uni_green.png"
                            alt="Uni_Green_Packaging">
                        <img class="uni_packaging uni_pink"
                            src="../../assets/Photo's/packaging/png/catalogus_sokken_uni_pink.png"
                            alt="Uni_Pink_Packaging">
                        <img class="uni_packaging uni_red"
                            src="../../assets/Photo's/packaging/png/catalogus_sokken_uni_red.png"
                            alt="Uni_Red_Packaging">
                        <img class="uni_packaging uni_yellow"
                            src="../../assets/Photo's/packaging/png/catalogus_sokken_uni_yellow.png"
                            alt="Uni_Yellow_Packaging">

                    </div>

                </div>

                <div class="Stripes">

                    <div class="Stripes_Text">

                        <h2>Classic Stripes Color</h2>
                        <p>For the bold ones with the wish of seeing their lives delined by happy colors</p>

                        <div class="color_buttons">

                            <!-- Blue Selector -->
                            <input type="radio" id="st_blue" name="st_button" checked>
                            <label for="st_blue" class="blue"></label>

                            <!-- Green Selector -->
                            <input type="radio" id="st_green" name="st_button">
                            <label for="st_green" class="green"></label>

                            <!-- Pink Selector -->
                            <input type="radio" id="st_pink" name="st_button">
                            <label for="st_pink" class="pink"></label>

                            <!-- Red Selector -->
                            <input type="radio" id="st_red" name="st_button">
                            <label for="st_red" class="red"></label>

                            <!-- Yellow Selector -->
                            <input type="radio" id="st_yellow" name="st_button">
                            <label for="st_yellow" class="yellow"></label>

                        </div>

                    </div>

                    <div class="Stripes_Imgs">

                        <!-- Main Images -->
                        <img class="stripes_display stripes_socks_blue"
                            src="../../assets/Photo's/catalogus/Sunny_socks_blue.jpg" alt="Stripes_Blue">
                        <img class="stripes_display stripes_socks_green"
                            src="../../assets/Photo's/catalogus/Sunny_socks_green.jpg" alt="Stripes_Green">
                        <img class="stripes_display stripes_socks_pink"
                            src="../../assets/Photo's/catalogus/Sunny_socks_pink_01.jpg" alt="Stripes_Pink">
                        <img class="stripes_display stripes_socks_red"
                            src="../../assets/Photo's/catalogus/Sunny_socks_red.jpg" alt="Stripes_Red">
                        <img class="stripes_display stripes_socks_yellow"
                            src="../../assets/Photo's/catalogus/Sunny_socks_yellow.jpg" alt="Stripes_Yellow">

                        <!-- Packaging Images -->
                        <img class="stripes_packaging stripes_blue"
                            src="../../assets/Photo's/packaging/png/catalogus_sokken_stripes_blue.png"
                            alt="Stripes_Blue_Packaging">
                        <img class="stripes_packaging stripes_green"
                            src="../../assets/Photo's/packaging/png/catalogus_sokken_stripes_green.png"
                            alt="Stripes_Green_Packaging">
                        <img class="stripes_packaging stripes_pink"
                            src="../../assets/Photo's/packaging/png/catalogus_sokken_stripes_pink.png"
                            alt="Stripes_Pink_Packaging">
                        <img class="stripes_packaging stripes_red"
                            src="../../assets/Photo's/packaging/png/catalogus_sokken_uni_red.png"
                            alt="Stripes_Red_Packaging">
                        <img class="stripes_packaging stripes_yellow"
                            src="../../assets/Photo's/packaging/png/catalogus_sokken_stripes_yellow.png"
                            alt="Stripes_Yellow_Packaging">

                    </div>

                </div>
            </div>
        </div>
        <?php include "../../components/footer/footer.php"; ?>
    </main>
</body>

</html>