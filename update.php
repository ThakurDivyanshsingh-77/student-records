<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rollno = $_POST['rollno'];
    $name   = $_POST['name'];
    $age    = $_POST['age'];
    $city   = $_POST['city'];
    $mobno  = $_POST['mobno'];

    $sql = "UPDATE students SET name=?, age=?, city=?, mobno=? WHERE rollno=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sissi", $name, $age, $city, $mobno, $rollno);

    if ($stmt->execute()) {
        echo "<script>alert('Record updated successfully!'); window.location='index.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
