


<?php
if (isset($_POST['message'])) {
    $msg = strtolower(trim($_POST['message']));

    if (strpos($msg, 'hello') !== false || strpos($msg, 'hi') !== false) {
        echo "Hey there! 👋 Welcome to Sunny Socks!";
    } elseif (strpos($msg, 'price') !== false) {
        echo "Our socks start at €5 per pair.";
    } elseif (strpos($msg, 'shipping') !== false) {
        echo "We offer free shipping for orders over €20.";
    } elseif (strpos($msg, 'return') !== false) {
        echo "You can return any unused socks within 14 days of purchase.";
    } else {
        echo "I'm SunnyBot! ☀️ Ask me about prices, shipping, or returns.";
    }
} else {
    echo "No message received.";
}
?>
