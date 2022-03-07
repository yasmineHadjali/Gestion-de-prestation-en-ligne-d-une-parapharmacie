<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();


$response= array('message' => 'veuillez saisir les données dans tous les champs',
            'num' => 0, 
            
);
// include('Database/dbconfig.php');
// $email_PC = $_POST['email-PC'];
// $response['eml'] = $_POST['PC-btn'] ;
if(isset($_POST['email-PC']) || isset($_POST['password-PC']) || isset($_POST['newpassword']) || isset($_POST['confirmnewpassword'])){

$email_PC = $_POST['email-PC'];
$password_PC = $_POST['password-PC'];
$response['eml'] = $email_PC ;
$newpassword_PC = $_POST['newpassword'];
$confirmnewpassword_PC = $_POST['confirmnewpassword'];
// $query3 = "SELECT * FROM register WHERE email = '$email_PC' AND  password = '$password_PC' ";
// $query_run = mysqli_query($conn,$query3);

$query3 = "SELECT * FROM register WHERE email = '$email_PC' AND  password = '$password_PC";
$result = $conexion->prepare($query3);
$result->execute();        


//     // mysqli_fetch_array($query_run,MYSQLI_NUM)
if($result)
{
  // echo '<script type ="text/javascript"> alert("Data Updated") </script>';

  if($newpassword_PC == $confirmnewpassword_PC){
    
//   $sql="UPDATE `register` SET password='$newpassword_PC' where id='1'  ";
//   $query1_run = mysqli_query($conn,$sql);

  $sql = "UPDATE `register` SET password='$newpassword_PC' where id='1'  ";
$results = $conexion->prepare($sql);
$results->execute();

  $response['message'] = "le mot de passe a été modifie avec succés";
  $response['num'] = 1 ;
  if($results){
    // echo '<script type ="text/javascript"> alert("Data Updated") </script>';
    // $response['message'] = "Data Updated";
  }else{
    // echo '<script type ="text/javascript"> alert("Error") </script>';
    
    $response['message'] = "Error";
  }

}else{

//   echo '<script type ="text/javascript"> alert("Mot de passe incorrect") </script>';
   
   $response['message'] = "Le nouveau mot de passe et le mot de passe de confirmation ne correspondent pas";
}


    // echo '<script type ="text/javascript"> alert("Your password has been changed") </script>';

//  $_SESSION['username']=$email_login;
//  header('location: index.php');

}else{
  $response['message'] = "email ou le mot de passe invalide";
  
 
}

}
echo json_encode($response, JSON_UNESCAPED_UNICODE);