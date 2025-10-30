<?php
include('./config/config.php');

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $full_name = $_POST['full_name'];
    $lga = $_POST['lga'];
    $ward = $_POST['ward'];
    $polling_unit = $_POST['polling_unit'];
    $phone = $_POST['phone'];

    // handle image upload
    $photo = "";
    if (!empty($_FILES['photo']['name'])) {
        $targetDir = "uploads/";
        if (!file_exists($targetDir)) mkdir($targetDir, 0777, true);
        $fileName = time() . "_" . basename($_FILES["photo"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFilePath)) {
            $photo = $fileName;
        }
    }

    // insert data into database
    $stmt = $conn->prepare("INSERT INTO adc_members (full_name, lga, ward, polling_unit, phone, photo) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $full_name, $lga, $ward, $polling_unit, $phone, $photo);

    if ($stmt->execute()) {
        $new_id = $conn->insert_id;
        echo "<script>alert('Registration successful!'); window.location='card.php?id=$new_id';</script>";

    } else {
        echo "<script>alert('Error saving data.'); window.history.back();</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
