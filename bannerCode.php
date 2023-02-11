<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <?php
    if( empty(session_id()) && !headers_sent()){
    session_start();
}
    $db = mysqli_connect('localhost', 'root', '','annoucements');
    if(!$db){
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT image_url FROM store ORDER BY RAND() LIMIT 1";
    $result = $db->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo '<div style="background-color: #FFFFF; height: 100vh; text-align: center;">';
        echo '<img src="' . $row['image_url'] . '" style="width: 70%; height: 70%; object-fit: cover;" />';
        echo '</div>';
    } else {
        echo "0 results";
    }

    $db->close();
  ?>
  <!-- ask ron where the fuck he wants the banner-->
</body>
</html>
