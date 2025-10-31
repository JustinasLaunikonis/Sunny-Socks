<?php
session_start();

if (!isset($_SESSION['chat_history'])) {
    $_SESSION['chat_history'] = [];
}

if (isset($_POST['clear'])) {
    $_SESSION['chat_history'] = [];
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['message'])) {
    // Clean user input: remove extra spaces, tabs, and newlines
    $user_input = strtolower(trim(preg_replace('/\s+/', ' ', $_POST['message'])));
    $response = "";

  
// 🧦 Funny chatbot logic
if (strpos($user_input, "hello") !== false || strpos($user_input, "hi") !== false) {
    $response = "Hey there! Ready to talk about socks that make your feet feel like royalty?";
} elseif (strpos($user_input, "how are you") !== false) {
    $response = "I’m doing amazing — no holes in my logic or my socks today. You?";
} elseif (strpos($user_input, "bye") !== false) {
    $response = "Goodbye! Don’t forget — life’s too short for boring socks!";
} elseif (strpos($user_input, "sizes") !== false) {
    $response = "We’ve got 35–38, 39–42, and 43–46 — basically, if you’ve got feet, we’ve got socks.";
} elseif (strpos($user_input, "shrink") !== false) {
    $response = "Nope! They stay loyal — unlike that one person who said they’d text back.";
} elseif (strpos($user_input, "custom") !== false || strpos($user_input, "personalized") !== false) {
    $response = "Of course! We can print your name, your logo, or even your pet’s face. Imagine your cat judging you from your ankles.";
} elseif (strpos($user_input, "eco") !== false || strpos($user_input, "sustainable") !== false) {
    $response = "Totally! Our bamboo socks are greener than a salad at a yoga retreat.";
} else {
    $response = "Hmm... I didn’t quite get that. Try asking about sizes, materials, or custom socks!";
}





    //  Store each message pair together (user + bot)
    $_SESSION['chat_history'][] = [
        "user" => $user_input,
        "bot" => $response
    ];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunny Socks Chatbot</title>
    <link rel="stylesheet" href="chatbot.css">
</head>
<body>

<div class="chat-container">
    <div class="chat-box" id="chat-box">
        <?php foreach ($_SESSION['chat_history'] as $chat): ?>
            <!-- User message first -->
            <div class="message user-msg">
                <strong>You:</strong> <?= htmlspecialchars($chat['user']) ?>
            </div>
            <!-- Bot reply below -->
            <div class="message bot-msg">
                <strong>Dummy:</strong> <?= htmlspecialchars($chat['bot']) ?>
            </div>
        <?php endforeach; ?>
      <!--  <p id="typing-indicator" class="typing" style="display:none;">🤖 Dummy is typing...</p> -->
    </div>

    <form method="post" id="chat-form">
        <textarea name="message" placeholder="Say something..." required></textarea>
        <button type="submit">Send</button>
        
        <button type="submit" name="clear" value="1" class="clear-btn">🧹 Clear</button>
    </form>
</div>

<script src="chatbot.js"></script>

</body>
</html>
