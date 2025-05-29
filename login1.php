<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($hashed_password);
    
    if ($stmt->fetch()) {
        if (password_verify($password, $hashed_password)) {
            echo "✅ Login successful!";
        } else {
            echo "❌ Incorrect password!";
        }
    } else {
        echo "❌ User not found!";
    }

    $stmt->close();
    $conn->close();
}
?>
<style>
    
</style>
