<?php
include 'db.php';
echo "<pre>";
print_r($_POST);
echo "</pre>";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Safe access to form fields
    $petname = $_POST['petname'] ?? null;
    $breed  = $_POST['breed'] ?? null;
    $cost  = $_POST['cost'] ?? null;
    $age  = $_POST['age'] ?? null;

    // Check if both fields are filled
    if (!$petname || !$breed || !$cost || !$age) {
        echo "❌ Please fill in all fields.";
        exit();
    }

    $stmt = $conn->prepare("INSERT INTO sell (petname, breed, cost, age) VALUES (?, ?, ?, ?)");
    if (!$stmt) {
        echo "❌ Prepare failed: " . $conn->error;
        exit();
    }

    $stmt->bind_param("ssss", $petname, $breed, $cost, $age);
    if ($stmt->execute()) {
        header("Location: success3.php");
        exit();
    } else {
        echo "❌ Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>
