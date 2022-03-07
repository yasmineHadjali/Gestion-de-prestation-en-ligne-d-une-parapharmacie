<?php
include "Database/dbconfig.php";

$request = $_POST['request'];
$d = $_POST['d'];
if(($request == 2) && ($d == 1)){
    

    $deleteid = $_POST['deleteid'];
        mysqli_query($conn,"DELETE FROM clients WHERE id=".$deleteid);
    

    echo $deleteid;
    exit;
}