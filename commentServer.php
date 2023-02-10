<?php
$servername1 = "localhost";
$username1 = "root";
$password1 = "";
$dbname1 = "comments";

// Create connection
$conn1 = new mysqli($servername1, $username1, $password1, $dbname1);

// Check connection
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
}


if (isset($_POST['post_commen'])) {
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    
    $query2 = "INSERT INTO comment (name, comment) VALUES('$name', '$comment')";
    mysqli_query($conn1, $query2);

    header("Location: reviews.php?uploadsuccess");
}


//if (isset($_POST['submit'])) {
//    $name = $_POST['name'];
//    $comments = $_POST['comment'];
//    
//    $query = "INSERT INTO comment (comment) VALUES('$comments')";
//    mysqli_query($conn1, $query);
//    header("Location: reviews.php?uploadsuccess");
//}

