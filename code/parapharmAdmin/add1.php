<?php
include_once 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
//  include_once 'conexion1.php';
// //  $nom = (isset($_POST['nom'])) ? $_POST['nom'] : '';
// //  $cat = (isset($_POST['categorie'])) ? $_POST['categorie'] : '';
// //  $mfg = (isset($_POST['date_mfg'])) ? $_POST['date_mfg'] : '';
// //  $exp = (isset($_POST['date_exp'])) ? $_POST['date_exp'] : '';
// //  $Quantite = (isset($_POST['Quantite'])) ? $_POST['Quantite'] : '';
// //  $price = (isset($_POST['price'])) ? $_POST['price'] : '';
// $cat = (isset($_POST['categorie'])) ? $_POST['categorie'] : 'yiit';
// //  $requete = "INSERT INTO categorie (cat) VALUES('$cat') WHERE ";			
// //          $resultat = $conexion->prepare($requete);
// //          $resultat->execute(); 
     
// $consulta = "SELECT * FROM categorie ORDER BY cat='$cat' DESC LIMIT 1";
//         $resultado = $conexion->prepare($consulta);
//         $resultado->execute();
//         $data=$resultado->fetchAll(PDO::FETCH_ASSOC);

// echo $cat;
// echo 'hello the ahello hdt;qq lfpiiifn pifqjoif hfkjshfsks';

// print json_encode($data, JSON_UNESCAPED_UNICODE);
// $conexion=null;
// $server_name = 'localhost';
// $db_username = 'root';
// $db_password = '88@1310L';
// $db_name = 'adminpanel';

// $conn = mysqli_connect($server_name,$db_username,$db_password);
// $dbconfig = mysqli_select_db($conn,$db_name);

// if($dbconfig){

//     // echo 'Database Connected';

// }else{

//     echo '
//     <div class="container " style="margin-top:100px;">

//     <!-- 404 Error Text -->
//     <div class="text-center col-12">
//       <div class="alert-danger " style="font-size:25px;">Database Connection Failed</div>
//       <p class="lead text-gray-800 mb-5">Database</p>
//       <p class="text-gray-500 mb-0">The page your searching it is not available :(</p>
     
//     </div>

//   </div>';

// }
// $cat = $_POST['categorie'];
// // $d = $_POST['d'];



// //     $deleteid = $_POST['deleteid']; WHERE categorie='$cat' insert into cat3 (id, categorie) values (1, 'Metformin Hydrochloride');
//       $sql =  "INSERT INTO cat3 (categorie) VALUES ('$cat')";
//         mysqli_query($conn,$sql);
    

//     echo $cat;

// $option_insert = $_POST['option_insert'];
$option_insert=$_POST['option'];
if($option_insert == 1){
  $res = array( 
    'status' => 0, 
    'message' => "Form submission failed, WOW.".$_POST['cat'].' yea', 
    'result' => 0,
    'Path' =>''

); 
  $cat = $_POST['cat'];
  // echo $cat.'<br>';
  
    // Get the submitted form data 
    $cat = $_POST['cat'];
    $response['message'] = 'Almost Done !!!'; 
                $consulta = "INSERT INTO categorie (categorie) VALUES ('$cat')" ;			
                $resultado = $conexion->prepare($consulta);
                $resultado->execute();                 
                if($resultado){ 
                    $res['status'] = 1; 
                    $res['message'] = 'Form data submitted successfully! Wtf'; 
                    $res['result'] = 1;
                    $res['path'] = '';
                } 
             
        
    
 

// Return response 
echo json_encode($res);


}else{

  $uploadDir = 'uploads/'; 
$response = array( 
    'status' => 0, 
    'message' => "Form submission failed, please try again.".$_POST['nom_med'], 
    'result' => 0,
    'Path' =>''

); 

 
// If form is submitted 
if(isset($_POST['nom_med']) || isset($_POST['cat_med']) || isset($_POST['date_mfg']) || isset($_POST['date_exp']) || isset($_POST['qt_med']) || isset($_POST['price_med']) || isset($_POST['img_med']) || isset($_POST['code_med']) ){ 
    // Get the submitted form data 
    
    $code = $_POST['code_med'];
    $nom = $_POST['nom_med'];
    $cat = $_POST['cat_med']; 
    $mfg = $_POST['date_mfg']; 
    $exp = $_POST['date_exp'];
    $qte = $_POST['qt_med'];
    $price = $_POST['price_med'];
    // Check whether submitted data is not empty 
    if(!empty($nom) && !empty($cat)){ 
        // Validate email 
        
            $uploadStatus = 1; 
             
            // Upload file 
            $uploadedFile = ''; 
            if(!empty($_FILES["img_med"]["name"])){ 
                 
                // File path config 
                $fileName = basename($_FILES["img_med"]["name"]); 
                $targetFilePath = $uploadDir . $fileName; 
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                 
                // Allow certain file formats 
                $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg'); 
                if(in_array($fileType, $allowTypes)){ 
                    // Upload file to the server 
                    if(move_uploaded_file($_FILES["img_med"]["tmp_name"], $targetFilePath)){ 
                        $uploadedFile = $fileName; 
                    }else{ 
                        $uploadStatus = 0; 
                        $response['message'] = 'Sorry, there was an error uploading your file.'; 
                    } 
                }else{ 
                    $uploadStatus = 0; 
                    $response['message'] = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.'; 
                } 
            }else{
                $uploadedFile = 'avatar_2x.png';
            } 
             
            if($uploadStatus == 1){ 
                // Include the database config file 
                // include_once 'dbConfig.php'; 
                 
                // // Insert form data in the database 
                // $consulta = $conexion->query("INSERT INTO articles (Article_designation,Article_PUHT,date_mfg,date_exp,Article_Qte,categorie,image) VALUES ('$nom', '$price', '$mfg', '$exp', '$qte', '$cat', '$uploadedFile')"); 
                
                // $consulta = "UPDATE articles SET Article_designation ='$nom', Article_PUHT ='$price', date_mfg ='$mfg', date_exp ='$exp' , Article_Qte ='$qte' , categorie ='$cat'  , image ='$uploadedFile'";
                $consulta = "INSERT INTO articles (Article_code,Article_designation,Article_PUHT,date_mfg,date_exp,Article_Qte,categorie,image) VALUES ('$code','$nom', '$price', '$mfg', '$exp', '$qte', '$cat', '$uploadedFile')" ;
                $resultado = $conexion->prepare($consulta);
                $resultado->execute();                 
                if($resultado){ 
                    $response['status'] = 1; 
                    $response['message'] = 'Form data submitted successfully!'.$uploadedFile.' Wtf'; 
                    $response['result'] = 1;
                    $response['path'] = (!empty($_FILES["img_med"]["name"])) ?'uploads/'.$fileName :'uploads/'.$uploadedFile;
                } 
            } 
         
    }else{ 
         $response['message'] = 'Please fill all the mandatory fields (name and email).'; 
    } 
} 

// Return response 
echo json_encode($response);

}




    exit;