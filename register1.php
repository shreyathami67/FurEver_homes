<?php
include 'db.php';
echo "<pre>";
print_r($_POST);
echo "</pre>";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Safe access to form fields
    $location = $_POST['location'] ?? null;
    $number   = $_POST['number'] ?? null;

    // Check if both fields are filled
    if (!$location || !$number) {
        echo "Please fill in all fields.";
        exit();
    }

    $stmt = $conn->prepare("INSERT INTO user_detail (location, number) VALUES (?, ?)");
    if (!$stmt) {
        echo "Prepare failed: " . $conn->error;
        exit();
    }

    $stmt->bind_param("ss", $location, $number);
    if ($stmt->execute()) {
        header("Location: success2.php");
        exit();
    } else {
        echo "❌ Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>
