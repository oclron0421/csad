<?php

$db = mysqli_connect("localhost", "root", "", "likedislike");

if (!$db) {
  die("Error connecting to database: " . mysqli_connect_error());
}

// Insert a new row for the review
$sql = "INSERT INTO reviews (likes, dislikes) VALUES (0, 0)";
$result = mysqli_query($db, $sql);

if (!$result) {
  die("Error inserting review: " . mysqli_error($db));
}

$reviewId = mysqli_insert_id($db);

// Increment the like count for the review
$sql = "UPDATE reviews SET likes = likes + 1 WHERE id = $reviewId";
$result = mysqli_query($db, $sql);

if (!$result) {
  die("Error incrementing like count: " . mysqli_error($db));
}

// Increment the dislike count for the review
$sql = "UPDATE reviews SET dislikes = dislikes + 1 WHERE id = $reviewId";
$result = mysqli_query($db, $sql);

if (!$result) {
  die("Error incrementing dislike count: " . mysqli_error($db));
}

mysqli_close($db);
?>