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
    $rating = $_POST['rating']; //newly added line for the rating

    // check if all fields are filled
    if (!empty($foodname) && !empty($location) && !empty($description) && !empty($rating)) { //added check for rating
        $file = $_FILES['image'];
        $fileName = $_FILES['image']['name'];
        $fileTmpName = $_FILES['image']['tmp_name'];
        $fileSize = $_FILES['image']['size'];
        $fileError = $_FILES['image']['error'];
        $fileType = $_FILES['image']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png');
        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 1000000) {
                    $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                    $fileDestination = 'uploads/' . $fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    $stmt = $conn->prepare("INSERT INTO `food_review` (`foodname`, `location`, `image`, `description`, `rating`) VALUES (?, ?, ?, ?, ?)"); //modify the query to include the new column
                    $stmt->bind_param("ssssi", $foodname, $location, $fileDestination, $description, $rating); //modify the types to include an integer for the rating
                    $stmt->execute();
                    header("Location: contact.php?uploadsuccess");
                } else {
                    echo "Your file is too big!";
                }
            } else {
                echo "There was an error uploading your file!";
            }
        } else {
            echo "You cannot upload files of this type!";
        }
    }
}

$conn->close();
?>