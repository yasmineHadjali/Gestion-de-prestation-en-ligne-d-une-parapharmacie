<?php
    session_start();
    if(isset($_GET['logout-btn'])){
    session_destroy();
    unset($_SESSION['username']);
        header('location:login.php');

}
?>