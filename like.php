<?php
include 'like_func.php';

$myid = $_POST["myid"];
$pid = $_POST["id"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "review";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$query = "INSERT INTO food_review (foodname, location, image, description, rating, likes) VALUES('$foodname', '$location', '$newImageName', '$description', '$rating', $likes )";
try {
     if (check_if_post_has_likes($pid, $conn)) {
             if (check_if_user_has_already_liked($myid, $pid, $conn))
                 remove_user_like_from_post($myid, $pid, $conn);
             else        
                add_user_like_to_post ($myid, $pid, $conn);
     }
     else
         create_row_for_post_then_add_user_like ($myid, $pid, $conn);
         
   // echo $row[0][0];

}
catch (Exception $e){
    echo $e;
}

mysqli_close($conn);
header('Location:reviews.php');
