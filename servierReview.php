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
            $query = "INSERT INTO food_review (foodname, location, image, description) VALUES('$foodname', '$location', '$newImageName', '$description' )";
            mysqli_query($conn, $query);
            header("Location: contact.php?uploadsuccess");
           
         
        }
    
   
//        $file = $_FILES['image'];
//        $fileName = $_FILES['image']['name'];
//        $fileTmpName = $_FILES['image']['tmp_name'];
//        $fileSize = $_FILES['image']['size'];
//        $fileError = $_FILES['image']['error'];
//        $fileType = $_FILES['image']['type'];
//
//        $fileExt = explode('.', $fileName);
//        $fileActualExt = strtolower(end($fileExt));
//
//        $allowed = array('jpg', 'jpeg', 'png');
//        if (in_array($fileActualExt, $allowed)) {
//            if ($fileError === 0) {
//                if ($fileSize < 1000000) {
//                    //$fileNameNew = uniqid(); 
//                    //$fileNameNew .= "." . $fileActualExt;
//                    $fileNameNew = uniqid('', true) . "." . $fileActualExt;
//                        
//                    $fileDestination = 'img/' . $fileNameNew;
//                    move_uploaded_file($fileTmpName, $fileDestination);
//                    $stmt = $conn->prepare("INSERT INTO `food_review` (`foodname`, `location`, `image`, `description`, `rating`) VALUES (?, ?, ?, ?, ?)"); //modify the query to include the new column
//                    $stmt->bind_param("ssssi", $foodname, $location, $fileDestination, $description, $rating); //modify the types to include an integer for the rating
//                    $stmt->execute();
//                    header("Location: contact.php?uploadsuccess");
//                } else {
//                    echo "Your file is too big!";
//                }
//            } else {
//                echo "There was an error uploading your file!";
//            }
//        } else {
//            echo "You cannot upload files of this type!";
//        }
    }
    $conn->close();

}

?>


