<?php
$token = "7610595538:AAFqK7S1QtrKrO6FAe6Eb09Jdsgbo_3ALbk"; // استبدل بالتوكن حقك
$channel = "@ehzn"; // استبدل بمعرف قناتك

$content = file_get_contents("php://input");
$update = json_decode($content, true);

if (!$update) {
    exit;
}

$message = $update["message"];
$chat_id = $message["chat"]["id"];
$text = $message["text"];

if ($text == "/start") {
    sendMessage($chat_id, "أهلا بك في بوت استقبال الطلبات !\nاكتب طلبك بهذه الصيغة:\nالاسم - نوع الخدمة - المبلغ");
} else {
    sendMessage($chat_id, "تم استلام طلبك، وسيتم مراجعته.");
    sendMessage($channel, "طلب جديد من @$chat_id:\n$text");
}

function sendMessage($chat_id, $text) {
    global $token;
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($text));
}
?>
