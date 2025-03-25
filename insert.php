<?php
include 'config.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form data capture
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $position = isset($_POST['position']) ? $_POST['position'] : '';
    $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
    $comments = isset($_POST['comments']) ? $_POST['comments'] : '';

    // Secure data to prevent SQL injection
    $title = $conn->real_escape_string($title);
    $name = $conn->real_escape_string($name);
    $position = $conn->real_escape_string($position);
    $mobile = $conn->real_escape_string($mobile);
    $comments = $conn->real_escape_string($comments);

    // Insert query
    $sql = "INSERT INTO new_details (title, name, position, mobile, comments) 
            VALUES ('$title', '$name', '$position', '$mobile', '$comments')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data inserted successfully!'); window.location.href='contactus.php';</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "'); window.location.href='contactus.php';</script>";
    }

    $conn->close();
} else {
    echo "<script>alert('Invalid request!'); window.location.href='contactus.php';</script>";
}
?>
