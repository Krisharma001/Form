<?php
require_once('conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $gender = $_POST['gender'];
  $developer = implode(", ",$_POST['developer']);
print_r([$gender]);
  $query = "INSERT INTO fc (`Name`, `Email address`, `Subject`, `Message`, `Gender`, `Developer`) 
            VALUES ('$name', '$email', '$subject', '$message', '$gender', '$developer')";

  if ($conn->query($query) === TRUE) {
    echo "Data inserted successfully.";
  } else {
    echo "Error: " . $query . "<br>" . $conn->error;
  }
}
$conn->close();
header("Location: index.php");
exit();
?>