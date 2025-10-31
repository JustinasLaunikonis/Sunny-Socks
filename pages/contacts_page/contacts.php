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
            <form class="contact-form">
                <div class="name-surname">
                    <input type="text" id="name" class="name" name="name" placeholder="First Name">
                    <input type="text" id="surname" class="surname" name="surname" placeholder="Surname">
                </div>
                <div class="email-phone">
                    <input type="text" id="email" class="email" name="email" placeholder="Email address">
                    <input type="text" id="phone" class="phone" name="phone" placeholder="Phone number">
                </div>
                <div>
                    <input type="text" id="company" class="company" name="company" placeholder="Company name">
                </div>
                <div>
                    <textarea name="message" id="message" class="message" name="message" placeholder="Your message"></textarea>
                </div>
                <div class="form-text">
                    By continuing, you agree to our Terms and Privacy Policy.<br>
                    We will never share your information with third parties.
                </div>
                <div class="subscribe-box">
                    <input type="checkbox" id="subscribe-checkbox" class="subscribe-checkbox">
                    <label for="subscribe-checkbox" class="cross"></label>
                    <span class="subscribe-text">Subscribe to our newsletter.</span>
                </div>
                <div>
                    <button type="submit" class="send-button">Send!</button>
                </div>
            </form>
            <div class="Divider"></div>
            <div class="contacts-right">
                <div class="Contacts">Contacts!</div>
                <ul class="contact-list">
                    <li class="contact-item1"><a href="#" class="contact-link">+31 (0)123 456 789</a>
                        <img src="../../assets/Contact Page Assets/Phone_Bold.png" alt="Phone-Bold" class="Phone-Bold">
                    </li>
                    <li class="contact-item2"><a href="#" class="contact-link">+31 (0)123 456 789</a>
                        <img src="../../assets/Contact Page Assets/Whatsapp_Bold.png" alt="Whatsapp-Bold" class="Whatsapp-Bold">
                    </li>
                    <li class="contact-item3"><a href="#" class="contact-link">info@sunny.nl</a>
                        <img src="../../assets/Contact Page Assets/Email_Bold.png" alt="Email-Bold" class="Email-Bold">
                    </li>
                    <li class="contact-item4">Van Schaikweg 94,<br>7811 KL Emmen
                        <img src="../../assets/Contact Page Assets/Location_Bold.png" alt="Location-Bold" class="Location-Bold">
                    </li>
                </ul>
                <div class="contact-text">We are available by phone Monday through Friday from 8:30 a.m. to 5 p.m.</div>
                <div class="Follow-Us">Follow Us!</div>
                <div>
                    <img src="../../assets/Contact Page Assets/Linkdin_Button.png" alt="Linkdin-Button" class="Linkdin-Button">
                    <img src="../../assets/Contact Page Assets/Instagram_Button.png" alt="Instagram-Button" class="Instagram-Button">
                    <img src="../../assets/Contact Page Assets/Facebook_Button.png" alt="Facebook-Button" class="Facebook-Button">
                </div>
            </div>
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