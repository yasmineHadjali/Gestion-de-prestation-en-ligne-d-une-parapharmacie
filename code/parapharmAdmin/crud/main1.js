$(document).ready(function() {
    var id, opcion;
    opcion = 4;

    tablaUsuarios = $('#tablaUsuarios').DataTable({
        "ajax": {
            "url": "bd/crud.php",
            "method": 'POST', //usamos el metodo POST
            "data": { opcion: opcion }, //enviamos opcion 4 para que haga un SELECT
            "dataSrc": ""
        },
        "columns": [
                { "data": "id" },
                { "data": "nom_utilisateur" },
                { "data": "nom" },
                { "data": "email" },
                { "data": "civilite" },
                { "data": "telephone" },
                // {"data": "status"},
                { "defaultContent": "<div class='text-center'><div class='btn-group'><button id='edito' class='btn btn-primary btn-sm btnEditar'><i class='material-icons'>edit</i></button><button class='btn btn-danger btn-sm btnBorrar'><i class='material-icons'>delete</i></div></div>", "orderable": false }
            ]
            //<script>if(location.href == 'http://localhost/Project/admin/crud/clients.php'){var i = 0;alert(); $('#edito').css('display', 'none');}</script>

    });


    // if(location.href == "http://localhost/Project/admin/crud/clients.php"){
    //     alert("16");
    //     $(".wiw").css("display", "none !important");
    // }

    var fila; //capturer la ligne, pour modifier ou supprimer
    //soumettre pour enregistrement et mise à jour

    $('#formUsuarios').submit(function(e) {
        e.preventDefault(); //évite le comportement normal de soumettre, c'est-à-dire le rechargement total de la page
        // id = $.trim($('#id').val()); 
        //  var k = 2;
        username = $.trim($('#username').val());
        nom = $.trim($('#nom').val());
        email = $.trim($('#email').val());
        civilite = $.trim($('#civilite').val());
        telephone = $.trim($('#telephone').val());
        // status = $.trim($('#status').val());                            
        $.ajax({
            url: "bd/crud.php",
            type: "POST",
            datatype: "json",
            data: { id: id, nom_utilisateur: username, nom: nom, email: email, civilite: civilite, telephone: telephone, opcion: opcion },

            success: function(data) {
                tablaUsuarios.ajax.reload(null, false);

                alert(username);
                // $(location).attr('href', 'bd/crud.php');
            }
        });
        $('#modalCRUD').modal('hide');

    });



    //para limpiar los campos antes de dar de Alta una Persona
    $("#btnNuevo").click(function() {
        opcion = 1; //alta           
        id = null;
        $("#formUsuarios").trigger("reset");
        $(".modal-header").css("background-color", "#17a2b8");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Alta de Usuario");
        $('#modalCRUD').modal('show');
    });

    //Editar        
    $(document).on("click", ".btnEditar", function() {
        opcion = 2; //editar
        fila = $(this).closest("tr");
        id = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
        username = fila.find('td:eq(1)').text();
        nom = fila.find('td:eq(2)').text();
        email = fila.find('td:eq(3)').text();
        civilite = fila.find('td:eq(4)').text();
        telephone = fila.find('td:eq(5)').text();
        // status = fila.find('td:eq(6)').text();
        $("#id").val(id);
        $("#username").val(username);
        $("#nom").val(nom);
        $("#email").val(email);
        $("#civilite").val(civilite);
        $("#telephone").val(telephone);
        alert(location.href);
        // $("#status").val(status);
        $(".modal-header").css("background-color", "#4fbfa8");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Edit");
        $('#modalCRUD').modal('show');
    });

    //Borrar
    $(document).on("click", ".btnBorrar", function() {
        fila = $(this);
        id = parseInt($(this).closest('tr').find('td:eq(0)').text());
        opcion = 3; //eliminar        
        var respuesta = confirm("¿Está seguro de borrar el registro " + id + "?");
        if (respuesta) {
            $.ajax({
                url: "bd/crud.php",
                type: "POST",
                datatype: "json",
                data: { opcion: opcion, id: id },
                success: function() {
                    tablaUsuarios.row(fila.parents('tr')).remove().draw();
                }
            });
        }
    });

    // info
    $(document).on("click", ".userinfo", function() {

        fila = $(this).closest("tr");

        username = fila.find('td:eq(1)').text();
        nom = fila.find('td:eq(2)').text();
        email = fila.find('td:eq(3)').text();
        civilite = fila.find('td:eq(4)').text();
        telephone = fila.find('td:eq(5)').text();
        // status = fila.find('td:eq(6)').text();
        //  $("#username1").val(username);
        // $("#username2").val(username) 
        $("#username1").html("<strong>Username : </strong>" + username);
        $("#nom1").html("<strong>Nom : </strong>" + nom);
        $("#email1").html("<strong>Email : </strong>" + email);
        $("#civilite1").html("<strong>Civilité : </strong>" + civilite);
        $("#telephone1").html("<strong>téléphone : </strong>" + telephone);


        // status = fila.find('td:eq(6)').text();

        //  $('.shw').html(response);
        $('#modalCart').modal('show');
        // AJAX request
        // $.ajax({
        //     url: 'bd/crud.php',
        //     type: 'post',
        //     data: {id: id},
        //     success: function(response){ 
        //         // Add response in Modal body
        //         $('.shw').html(response); 
        //         alert('ahhhhhh');
        //         // Display Modal
        //         $('#modalCart').modal('show'); 
        //     }
        // });
    });

    //         $('.userinfo').click(function(){

    //     var userid = $(this).data('id');

    //     // AJAX request
    //     $.ajax({
    //         url: 'ajaxfile.php',
    //         type: 'post',
    //         data: {id: userid},
    //         success: function(response){ 
    //             // Add response in Modal body
    //             $('.shw').html(response); 
    //             alert('ahhhhhh');
    //             // Display Modal
    //             $('#modalCart').modal('show'); 
    //         }
    //     });
    // });

});