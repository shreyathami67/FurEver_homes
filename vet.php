<?php
include 'db.php';
echo "<pre>";
print_r($_POST);
echo "</pre>";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Safe access to form fields
    $name = $_POST['name'] ?? null;
    $number  = $_POST['number'] ?? null;
    $email  = $_POST['email'] ?? null;

    // Check if both fields are filled
    if (!$name || !$number || !$email ) {
        echo "❌ Please fill in all fields.";
        exit();
    }

    $stmt = $conn->prepare("INSERT INTO vet (name, number, email) VALUES (?, ?, ?)");
    if (!$stmt) {
        echo "❌ Prepare failed: " . $conn->error;
        exit();
    }

    $stmt->bind_param("sss", $name, $number, $email);
    if ($stmt->execute()) {
        header("Location: success4.php");
        exit();
    } else {
        echo "❌ Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>
