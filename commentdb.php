<?php
if (isset($_POST['submit'])) {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "faq";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $description = $_POST['description'];

  $sql = "INSERT INTO complaint (name, email, subject, description)
  VALUES ('$name', '$email', '$subject', '$description')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>
