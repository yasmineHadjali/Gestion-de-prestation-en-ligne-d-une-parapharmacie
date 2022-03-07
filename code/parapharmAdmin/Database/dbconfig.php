<link href="../css/sb-admin-2.css" rel="stylesheet">
<?php

    $server_name = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'test';

    $conn = mysqli_connect($server_name,$db_username,$db_password);
    $dbconfig = mysqli_select_db($conn,$db_name);

    if($dbconfig){

        // echo 'Database Connected';

    }else{

        echo '
        <div class="container " style="margin-top:100px;">

        <!-- 404 Error Text -->
        <div class="text-center col-12">
          <div class="alert-danger " style="font-size:25px;">Database Connection Failed</div>
          <p class="lead text-gray-800 mb-5">Database</p>
          <p class="text-gray-500 mb-0">The page your searching it is not available :(</p>
         
        </div>

      </div>';

    }

?>