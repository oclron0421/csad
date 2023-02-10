<?php
require_once "likeconfiguration.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $reviewId = $_POST["reviewId"];
  $action = $_POST["action"];

  if ($action == "like") {
    $sql = "INSERT INTO likedislike (review_id, like_value) VALUES (?, 1) ON DUPLICATE KEY UPDATE like_value = 1";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $reviewId);
    mysqli_stmt_execute($stmt);
    echo "liked";
  } else if ($action == "dislike") {
    $sql = "INSERT INTO likedislike (review_id, dislike_value) VALUES (?, 1) ON DUPLICATE KEY UPDATE dislike_value = 1";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $reviewId);
    mysqli_stmt_execute($stmt);
    echo "disliked";
  }
}
?>
