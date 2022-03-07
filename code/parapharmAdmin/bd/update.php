<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

 
$uploadDir = '../uploads/'; 
$response = array( 
    'status' => 0, 
    'message' => 'Form submission failed, please try again.' ,
    'result' => 0,
    'Path' =>'',
    'tel' => '',
    'user' => '',
    'email' => '',

); 
 
// If form is submitted 
if(isset($_POST['user_up']) || isset($_POST['email_up']) || isset($_POST['img_insert']) || isset($_POST['tel_up'])){ 
    // Get the submitted form data 
    
    $numero = $_POST['tel_up'];
    $name = $_POST['user_up']; 
    $email = $_POST['email_up']; 
     
    // Check whether submitted data is not empty 
    if(!empty($name) && !empty($email)){ 
        // Validate email 
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){ 
            $response['message'] = 'Please enter a valid email.'; 
        }else{ 
            $uploadStatus = 1; 
             
            // Upload file 
            $uploadedFile = ''; 
            if(!empty($_FILES["img_insert"]["name"])){ 
                 
                // File path config 
                $fileName = basename($_FILES["img_insert"]["name"]); 
                $targetFilePath = $uploadDir . $fileName; 
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                 
                // Allow certain file formats 
                $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg'); 
                if(in_array($fileType, $allowTypes)){ 
                    // Upload file to the server 
                    if(move_uploaded_file($_FILES["img_insert"]["tmp_name"], $targetFilePath)){ 
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
                $consult = "SELECT * FROM register";
                $result = $conexion->prepare($consult);
                $result->execute();        
                $data=$result->fetchAll(PDO::FETCH_ASSOC);
                // print_r($data);
                $uploadedFile = $data['0']['picture'];
            } 
             
            if($uploadStatus == 1){ 
                // Include the database config file 
                // include_once 'dbConfig.php'; 
                 
                // // Insert form data in the database 
                // $insert = $conexion->query("INSERT INTO register (username,email,numero_tel,file_name) VALUES ('".$name."','".$email."','".$numero."','".$uploadedFile.")"); 
                $consulta = "UPDATE register SET username ='$name', email ='$email', numero_tel ='$numero', picture ='$uploadedFile'";
                // $consulta = "UPDATE INTO register (username, email, numero_tel, picture) VALUES('$name', '$email', '$numero', '$uploadedFile') ";			
                $resultado = $conexion->prepare($consulta);
                $resultado->execute();                 
                if($resultado){ 
                    $response['status'] = 1; 
                    $response['message'] = 'Form data submitted successfully!'.$uploadedFile.' Wtf'; 
                    $response['result'] = 1;
                    $response['path'] = (!empty($_FILES["img_insert"]["name"])) ?'uploads/'.$fileName :'uploads/'.$uploadedFile;
                    $response['tel'] =   $numero ;
                    $response['user'] = $name ;
                    $response['email'] = $email ;
                } 
            } 
        } 
    }else{ 
         $response['message'] = 'Please fill all the mandatory fields (name and email).'; 
    } 
} 

// Return response 
echo json_encode($response);

//
// echo '<script type="text/javascript">window.top.window.completeUpload(' . $result . ',\'' . $targetFilePath . '\');</script>  ';


     
     
