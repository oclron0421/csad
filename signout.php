<?php
session_start();
session_unset();
session_destroy();


// clear cache
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
setcookie("username", "", time() -3600, "/" );
setcookie("email", "",  time() -3600, "/" );
setcookie("password", "", time() -3600, "/" );

// redirect to login page
header("Location: login.php");
exit();
?>
