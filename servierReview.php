<?php
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

if (isset($_POST['submit'])) {
    $foodname = $_POST['foodname'];
    $location = $_POST['location'];
    $description = $_POST['description'];
    $rating = $_POST['rating'];
    //$rating = $_POST['rating']; //newly added line for the rating

    // check if all fields are filled
    
    if (!empty($foodname) && !empty($location) && !empty($description)) { //added check for rating
        $fileName = $_FILES["image"]["name"];
        $fileSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];
        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));
        if(!in_array($imageExtension, $validImageExtension)){
        echo
        "<script> alert('Invalid Image Extension'); </script>"
            ;
        }else if($fileSize > 1000000){
            echo
            "<script> alert('Image Size is Too Large'); </script>"
            ;
        }else{
            $newImageName= uniqid();
            $newImageName .= '.' . $imageExtension;

            move_uploaded_file($tmpName, 'images/' . $newImageName);
            $query = "INSERT INTO food_review (foodname, location, image, description, rating) VALUES('$foodname', '$location', '$newImageName', '$description', '$rating' )";
            mysqli_query($conn, $query);
            header("Location: contact.php?uploadsuccess");


        }

    }
    $conn->close();
    

}

?>


