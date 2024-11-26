<!-- Notification Generation Script (PHP)  -->
<?php
// Database connection
$pdo = new PDO('mysql:host=localhost;dbname=notifications_db', 'username', 'password');

// Add a new notification for user with ID 1
$user_id = 1;
$message = "You have a new message!";

$sql = "INSERT INTO notifications (user_id, message) VALUES (:user_id, :message)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['user_id' => $user_id, 'message' => $message]);

echo "Notification created successfully!";
?>