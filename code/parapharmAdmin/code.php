<?php
    // $hostname = 'localhost' ;

    //  session_start();
    // // Create Connection
    // $conn = mysqli_connect('localhost','root','88@1310L','adminpanel');

    //  $link = $conn;
    //  if (!$link) {
    //      echo '<p>Could not connect to the server ' . $hostname . '</p>\n';
    //      echo mysql_error();
    //  }else{
    //      echo '<p>Successfully connected to the server ' . $hostname . '</p>\n';
    //  }    

    // //  include('security.php');
    //  echo 'Didnt even enter 1';

    include('security.php');
    // // Login Data
     if(isset($_GET['login_btn'])){echo ' enter 2';

           $email_login = $_GET['email'];
           $password_login = $_GET['password'];
           $query = "SELECT * FROM register WHERE email = '$email_login' AND  password = '$password_login' ";
           $query_run = mysqli_query($conn,$query);
           
           
    
          echo 'Didnt even enter 3';
        
    //     // mysqli_fetch_array($query_run,MYSQLI_NUM)
       if(mysqli_fetch_array($query_run))
       {
        
            $row1 = mysqli_fetch_assoc($query_run);
            $_SESSION['username']=$email_login['username'];
            header('location: index.php');

          }else{
            echo 'FAILED';
            $_SESSION['status'] = 'Email ou mot de passe invalide';
            // $_SESSION['passf'] ='Email invalide or password';
            header('location: login.php');
            
       }
     }else{
         echo 'makanch login_btn';
     }
?>