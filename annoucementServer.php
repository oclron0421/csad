<?php
session_start();
$db = mysqli_connect('localhost', 'root', '','annoucements');
if(!$db){
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT image_url FROM store";
  $result = $db->query($sql);

  // Check if query returns any results
  if ($result && $result->num_rows > 0) {
    // Output each image
    while($row = $result->fetch_assoc()) {
      echo '<img src="' . $row['image_url'] . '"/>';
    }
  } else {
    echo "0 results";
  }

  $db->close();
?>
