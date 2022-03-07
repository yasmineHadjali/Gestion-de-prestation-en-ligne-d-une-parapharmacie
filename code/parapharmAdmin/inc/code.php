<?php
    session_start();
    // Create Connection
    $conn = mysqli_connect('localhost','root','88@1310L','adminpanel');

    

    include('../security.php');
    echo 'Didnt even enter 1';

    // Login Data
    if(isset($_POST['login_btn'])){

        $email_login = $_POST['email'];
        $password_login = $_POST['password'];
        $query = "SELECT * FROM register WHERE email = '$email_login' AND  password = '$password_login' ";
        $query_run = mysqli_query($conn,$query);

    
        echo 'Didnt even enter 2';
        
        // mysqli_fetch_array($query_run,MYSQLI_NUM)
      if(mysqli_fetch_array($query_run))
      {
            echo 'PASSED';
           $_SESSION['username']=$email_login;
           header('location : index.php');

      }else{
          echo 'FAILED';
          $_SESSION['status'] = 'Email ou mot de passe invalide';
          header('location : login.php');
      }
    }else{
        echo 'makanch login_btn';
    }
?>