
    
    
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <!-- <script src="assets/jquery/jquery-3.3.1.min.js"></script> -->
     <!-- <script src="assets/jquery/jquery-3.3.1.min.js"></script> -->
     
<script src="assets/jquery/jquery-3.3.1.min.js"></script>
<script href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
      <script src="assets/popper/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>  
       
    <!-- datatables JS -->
     <script type="text/javascript" src="assets/datatables/datatables.min.js"></script>    
       
     <script type="text/javascript" src="main1.js"></script>   
    <script type="text/javascript" src="main2.js"></script>    
    <script type="text/javascript" src="main3.js"></script>
    <script type="text/javascript" src="messages.js"></script>   
    <script type="text/javascript" src="ordonnance.js"></script>
    <script type="text/javascript" src="promotion.js"></script>
    <script type="text/javascript" src="commande.js"></script>

<!-- Bootstrap core JavaScript-->
  <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <!-- <script src="assets/jquery/jquery-3.3.1.min.js"></script> -->
  <script src="js/sb-admin-2.js"></script>

  <!-- Page level plugins -->
   <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script> 
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script> 
  <!-- <script src="main.js"></script> -->
  <!-- Page level custom scripts --> 
  <script src="js/demo/datatables-demo.js"></script> 
  <!-- <script src="assets/jquery/jquery-3.3.1.min.js"></script> -->
  <!-- <script src="main.js"></script> -->
  <!-- <script src="js/main.js"></script> -->
   <script type='text/javascript'>
            $(document).ready(function(){

                $('.userinfo').click(function(){
                   
                    var userid = $(this).data('id');

                    // AJAX request
                    $.ajax({
                        url: 'ajaxfile.php',
                        type: 'post',
                        data: {userid: userid},
                        success: function(response){ 
                            // Add response in Modal body
                            $('.shw').html(response); 

                            // Display Modal
                            $('#modalCart').modal('show'); 
                        }
                    });
                });
            });
            </script>

<script type='text/javascript'>
            $(document).ready(function(){

                $('.delete').click(function(){
                   
                    var deleteid = $(this).data('id');

                    // AJAX request
                    $.ajax({
                        url: 'deletelt.php',
                        type: 'post',
                        data: {d: 2,request: 2,deleteid: deleteid},
                        success: function(response){ 
                            // Add response in Modal body
                            $('.dlt').html(response); 

                            // Display Modal
                            $('#modalDelete').modal('show');
                            // Reload database    
                            // dataTable.ajax.reload();
                            
                $('.btn2').click(function(){
                   
                    var d = 1;
                   
                   // AJAX request
                   $.ajax({
                       url: 'deletelt.php',
                       type: 'post',
                       data: {d: d,request: 2,deleteid: deleteid},
                       success: function(response){ 
                           // Add response in Modal body
                           $('.dlt1').html(response); 

                           // Display Modal
                           $('#modalDelete1').modal('show');
                           // Reload database    
                        //    dataTable.ajax.reload(); 
                       }
                   });
               }); 
                        }
                    });
                });
            });
            </script>            


<script type='text/javascript'>
            $(document).ready(function(){

                $('.btn2').click(function(){
                   
                    // var deleteid = $(this).data('id');
                    
                    // AJAX request
                    $.ajax({
                        url: 'ajaxfile.php',
                        type: 'post',
                        data: {request: 2},
                        success: function(response){ 
                            // Add response in Modal body
                            $('.dlt1').html(response); 

                            // Display Modal
                            $('#modalDelete1').modal('show');
                            // Reload database    
                            dataTable.ajax.reload(); 
                        }
                    });
                });
            });
            </script>  

<script type='text/javascript'>
            $(document).ready(function(){

                $('.insert').click(function(){
                   
                     categorie = 'yab'; //$.trim($('#cat').val());

                    // AJAX request
                    $.ajax({
                        url: 'add.php',
                        type: 'post',
                        datatype:"json",
                        data: {categorie: categorie},
                        success: function(response){ 
                            // Add response in Modal body
                            // $('.shw').html(response); 
                                alert('Done');
                            // Display Modal
                            // $('#modalCart').modal('show'); 
                        }
                    });
                });
            });
            </script>



    
            <script type='text/javascript'>
            $(document).ready(function(){
                $("#form_newpsd").on('submit', function(e){
        e.preventDefault();
        // var formData = new FormData(this);
	    // formData.append('option', 1);
        // alert("GO GO GO");
        // console.log("GO GO GO");
        $.ajax({
            type: 'POST',
            url: 'bd/changepassword.php',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            // beforeSend: function(response){
            //     $('.insert_cat').attr("disabled","disabled");
            //     $('#form_add_cat').css("opacity",".5");
            // },
            success: function(response){
                // alert(response.message);
                // $('#msgaf').text(data['0'].message);veuillez saisir des données dans tous les champs
                if(response.num == 1){
                    $('#msgaf').text(response.message);
                    $("#msgaf").addClass("bg-success text-white");
                }else{
                    $('#msgaf').text(response.message);
                    $("#msgaf").addClass("bg-danger text-white");
                }
                $("#div1").addClass("important blue");
            }
        });
    });
            
                   
                        });
                          
        </script>
        <script>
          $(document).ready(function(e){
    // Submit form data via Ajax
    $("#form_add_prd").on('submit', function(e){
        
        var formData = new FormData(this);
        formData.append('option', 2);
        
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'add1.php',
            data: formData,
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('.insert_pd').attr("disabled","disabled");
                $('#form_add_prd').css("opacity",".5");
            },
            success: function(response){ //console.log(response);
                // alert("Enter Or Not");
                $('.statusMsg').html('');
                if(response.status == 1){
                    // alert(respone);
                    $('#form_add_prd')[0].reset();
                    $('.statusMsg').html('<p class="alert alert-success">'+response.message+'</p>');
                    // if(response.path != ''){
                    //     if(response.result == 1){
                    //     $('#img').attr("src", "");
                    //     $('#img').attr("src", response.path);
                    //     // $('#img_insert').attr("value", response.path);  
                    // }
                    // }
                }else{
                    $('.statusMsg').html('<p class="alert alert-danger">'+response.message+'</p>');
                }
                $('#form_add_prd').css("opacity","");
                $(".insert_pd").removeAttr("disabled");
            }
        });
    });
    $("#form_add_cat").on('submit', function(e){
        e.preventDefault();
        var formData = new FormData(this);
	    formData.append('option', 1);
        // alert("GO GO GO");
        // console.log("GO GO GO");
        $.ajax({
            type: 'POST',
            url: 'add1.php',
            data: formData,
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('.insert_cat').attr("disabled","disabled");
                $('#form_add_cat').css("opacity",".5");
            },
            success: function(response){
                console.log(response.message); 
                // alert("Succes");
                // alert(res.message);
                $('.statusMsg').html('');
                if(response.status == 1){
                    
                    $('#form_add_cat')[0].reset();
                    $('.statusMsg').html('<p class="alert alert-success">'+response.message+'</p>');
                    
                }else{
                $('.statusMsg').html('<p class="alert alert-danger">'+response.message+'</p>');
                }
                $('#form_add_cat').css("opacity","");
                $(".insert_cat").removeAttr("disabled");
            }
        });
    });
});
        </script>
                

        
       
        <script>
        $(document).ready(function(e){
    // Submit form data via Ajax
    $("#form_admin").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'bd/update.php',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('.submitBtn').attr("disabled","disabled");
                $('#form_admin').css("opacity",".5");
            },
            success: function(response){ //console.log(response);
                // alert("Enter Or Not");
                $('.statusMsg').html('');
                if(response.status == 1){
                    // alert(respone);
                    $('#form_admin')[0].reset();
                    $('.statusMsg').html('<p class="alert alert-success">'+response.message+'</p>');
                    // if(response.path != ''){
                        if(response.result == 1){
                        $('#img').attr("src", "");
                        $('#img').attr("src", response.path);
                        $('#user').attr("value", "");
                        $('#user').attr("value", response.user);
                        $('#example-email').attr("value", "");
                        $('#example-email').attr("value", response.email);
                        $('#tel').attr("value", "");
                        $('#tel').attr("value", response.tel);
                        $('#demo').text(response.user);
                        $('#demo').text(response.user);
                        $('#img_admin').attr("src", "");
                        $('#img_admin').attr("src", response.path);
                        // $('#img_insert').attr("value", response.path);  
                    }
                    // }
                }else{
                    $('.statusMsg').html('<p class="alert alert-danger">'+response.message+'</p>');
                }
                $('#form_admin').css("opacity","");
                $(".submitBtn").removeAttr("disabled");
            }
        });
    });
});
$("#img_insert").change(function() {
    var file = this.files[0];
    var fileType = file.type;
    var match = ['application/pdf', 'application/msword', 'application/vnd.ms-office', 'image/jpeg', 'image/png', 'image/jpg'];
    if(!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]) || (fileType == match[3]) || (fileType == match[4]) || (fileType == match[5]))){
        alert('Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.');
        $("#img_insert").val('');
        return false;
    }
});
// function completeUpload(success, fileName) {
//     if(success == 1){
//         $('#img').attr("src", "");
//         $('#img').attr("src", fileName);
//         $('#img_insert').attr("value", fileName);
//         // $('.uploadProcess').hide();
//     }else{
//         // $('.uploadProcess').hide();
//         alert('There was an error during file upload!');
//     }
//     return true;
// }

    </script>