<?php
require 'db.php';

$token = "TOKEN_BOT_ANDA";
$input = file_get_contents("php://input");
$update = json_decode($input, true);

$chat_id = $update["message"]["chat"]["id"];
$text = $update["message"]["text"];

// Simpan pesan ke DB
$stmt = $conn->prepare("INSERT INTO pesan (chat_id, pesan) VALUES (?, ?)");
$stmt->bind_param("ss", $chat_id, $text);
$stmt->execute();

// Balas pesan
$balasan = "Pesan kamu: " . $text;
file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($balasan));
?>
