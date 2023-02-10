<?php


function check_if_post_has_likes($pid, $conn) {
    $query = "SELECT users FROM like_review WHERE postID=".$pid."; ";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_all($result);
    if (empty($row)) 
        return false;
    else
        return true;
}

function add_user_like_to_post($myid, $pid, $conn) {
    $query = "SELECT users FROM like_review WHERE postID=".$pid."; ";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_all($result);
    if(($row[0][0]) != "") {
    $users = $row[0][0].".".$myid;
    }
    else 
        $users = $myid;
    $query2 = "UPDATE like_review SET users="."'".$users."'"." WHERE postID=".$pid;
    mysqli_query($conn, $query2);
    $query3 = "SELECT likes FROM food_review WHERE id=".$pid."; ";
    $result1 = mysqli_query($conn, $query3);
    $row2 = mysqli_fetch_assoc($result1);
    $likes = $row2['likes'] + 1;
    $query4 =  "UPDATE food_review SET likes='$likes'  WHERE id=".$pid.";";
    mysqli_query($conn, $query4);
    
    
}

function create_row_for_post_then_add_user_like($myid, $pid, $conn) {
    $query = "INSERT INTO like_review (postID, users) VALUES ('$pid', '$myid')";
    mysqli_query($conn, $query);
}

function check_if_user_has_already_liked($myid, $pid, $conn) {
    $query = "SELECT users FROM like_review WHERE postID=".$pid."; ";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_all($result);
    if(isset($row[0][0])) {
    $user_array = explode(".", $row[0][0]);
    foreach ($user_array as $user) {
        if ($user == $myid)
            return true;
    }
    return false;
    }
    return false;
    
    
}

function remove_user_like_from_post($myid, $pid, $conn) {
    $query = "SELECT users FROM like_review WHERE postID=".$pid."; ";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_all($result);
    $new_userlist = "";
    if(isset($row[0][0])) {
            
    $user_array = explode(".", $row[0][0]);
    foreach ($user_array as $user) {
        if ($user != $myid)
            $new_userlist = $new_userlist. ".". $user ;  
    }    
   
    
    $query2 = "UPDATE like_review SET users='$new_userlist' WHERE postID=".$pid;
    mysqli_query($conn, $query2);
    $query3 = "SELECT likes FROM food_review WHERE id=".$pid."; ";
    $result1 = mysqli_query($conn, $query3);
    $row2 = mysqli_fetch_assoc($result1);
    $likes = $row2['likes'] - 1;
    $query4 =  "UPDATE food_review SET likes='$likes'  WHERE id=".$pid.";";
    mysqli_query($conn, $query4);
    }
  
}