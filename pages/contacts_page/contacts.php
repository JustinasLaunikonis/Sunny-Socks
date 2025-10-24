<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" text="text/css" href="contacts.css">
    <title>Contact</title>
    <link rel="icon" type="image/x-icon" href="../../assets/illustraties/png/Sunny_socks_Green.png">

    <link rel="stylesheet" href="../../components/footer/footer.css">
    <link rel="stylesheet" href="../../components/footer/footer_pink.css">

    <link rel="stylesheet" href="../../components/header/header.css">
    <link rel="stylesheet" href="../../components/header/header_pink.css">
</head>
<body>
    <?php include '../../components/header/header.php'; ?>
    <main>
        <div>
            <img src="../../assets/Contact Page Assets/Messaging_Topper.png" alt="Messaging_Topper" class="Messaging_Topper">
            <img src="../../assets/Contact Page Assets/Connector.png" alt="Connector" class="Connector">
        </div>
        <div class="blue-box">
            <img src="../../assets/Contact Page Assets/Left_Smily_Icon.png" alt="Left_Smily_Icon" class="Left_Smily_Icon">
            <div class="blue-box-text">
                    Interested to get a hand in our colourful socks? <br>
                    Don't hesitate to contact us!
            </div>
            <img src="../../assets/Contact Page Assets/Right_Smily_Icon.png" alt="Right_Smily_Icon" class="Right_Smily_Icon">
        </div>
        <div>
            <img src="../../assets/Contact Page Assets/Image_Connector.png" alt="Image_Connector" class="Image_Connector">
        </div>
            <div class="grey-box">
                <div class="grey-box-text">
                All your purchases receipts are followed up with totally great socks-related jokes!<br>
                Because even your cringe smile is our way to brighten your day.
                </div>
        </div>
        <section class="form-box">
            <div class="white-box"></div>
            <form class="contact-form">
                <div>
                    <input type="text" id="name" class="name" name="name" placeholder="First Name">
                    <input type="text" id="surname" class="surname" name="surname" placeholder="Surname">
                </div>
                <div>
                    <input type="text" id="email" class="email" name="email" placeholder="Email address">
                    <input type="text" id="phone" class="phone" name="phone" placeholder="Phone number">
                </div>
                <input type="text" id="company" class="company" name="company" placeholder="Company name">
                <textarea name="message" id="message" class="message" name="message" placeholder="Your message"></textarea>
            </form>
        </section>
        <div class="pink-box">
            <div class="pink-box-text">
            Let's Sock and Roll!
            </div>
        </div>
    </main>
    <?php include "../../components/footer/footer.php"; ?>
</body>
</html>