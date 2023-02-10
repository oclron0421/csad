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
            $likes = 0;
            try {
            move_uploaded_file($tmpName, 'images/' . $newImageName);      
            $query = "INSERT INTO food_review (foodname, location, image, description, rating, likes) VALUES('$foodname', '$location', '$newImageName', '$description', '$rating', $likes )";
            mysqli_query($conn, $query);
            header("Location: contact.php?uploadsuccess");
            }
            catch (Exception $e) {
                echo $e;
            }
            


        }

    }
    
    
    
    $conn->close();
    

}

    if(isset($_GET['edit'])){
    $update = true;
    $result = mysqli_query($conn, "SELECT * FROM food_review WHERE id=$id");
    if(mysqli_num_rows($result) == 1){
        $n = mysqli_fetch_array($result);
        $food = $n['foodname'];
        $location = $n['location'];
        $image = $n['image'];
        $description = $n['description'];
        $rate = $n['rating'];
    }
    }
    //$data = $conn->query($db, $sql);


if(isset($_POST['update'])){
    $id = $POST['id'];
    $food = $n['foodname'];
    $location = $n['location'];
    $description = $n['description'];
    $rate = $n['rating'];
    
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
        $query = "UPDATE food_review SET foodname='$food', location='$location',image='$newImageName' description='$description', rating='$rating' ";
        mysqli_query($conn, $query);
        header("Location: contact.php?uploadsuccess");
    }
    header("Location: contact.php?uploadsuccess");
    
}

?>


