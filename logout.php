<?php
session_start(); 
$_SESSION = array();//creating array on each session
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();//setting cookies based on session values
    setcookie(session_name(), '', time() - 60*60,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
unset($_SESSION['login']);
session_destroy(); // destroy session
header("location:index.php"); 
?>

