    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="assets/jquery/jquery-3.3.1.min.js"></script>
     <script src="assets/popper/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script> 
      
    <!-- datatables JS -->
    <script type="text/javascript" src="assets/datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="main1.js"></script>  
    <script type="text/javascript" src="main2.js"></script>  


<!-- Bootstrap core JavaScript-->
  <!-- <script src="../vendor/jquery/jquery.min.js"></script> -->
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.js"></script>

  <!-- Page level plugins -->
   <script src="../vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/chart-area-demo.js"></script>
  <script src="../js/demo/chart-pie-demo.js"></script> 
   <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <!-- <script src="main.js"></script> -->
  <!-- Page level custom scripts --> 
  <script src="../js/demo/datatables-demo.js"></script> 

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