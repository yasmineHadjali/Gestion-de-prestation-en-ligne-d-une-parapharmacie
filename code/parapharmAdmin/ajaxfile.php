<?php
include "Database/dbconfig.php";

$userid = $_POST['userid'];

$sql = "SELECT * from clients where id=".$userid;
$result = mysqli_query($conn,$sql);

$response = "<table border='0' width='100%'>";

while( $row = mysqli_fetch_array($result) ){
    $id = $row['id'];
    $name = $row['nom'];
    $email = $row['email'];
    $username = $row['nom_utilisateur'];
    $gender = $row['civilite'];
    $phone = $row['telephone'];
    
    
    $response .= "<tr>";
    $response .= "<td>Name : </td><td>".$name."</td>";
    $response .= "</tr>";
    

    $response .= "<tr>";
    $response .= "<td>Username : </td><td>".$username."</td>";
    $response .= "</tr>";

    $response .= "<tr>";
    $response .= "<td>Civilite : </td><td>".$gender."</td>";
    $response .= "</tr>";

    $response .= "<tr>";
    $response .= "<td>Phone : </td><td>".$phone."</td>";
    $response .= "</tr>";

    
    $response .= "<tr>";
    $response .= "<td>Email : </td><td>".$email."</td>";
    $response .= "</tr>";
    


}
$response .= "</table>";

echo $response;
exit;


//<<<<<<<<<<<<<<<<<<<<
