$(document).ready(function() {
    var id, opcion;
    opcion = 4;

    tabla = $('#table_cat').DataTable({
        "ajax": {
            "url": "bd/crud3.php",
            "method": 'POST', //usamos el metodo POST
            "data": { opcion: opcion }, //enviamos opcion 4 para que haga un SELECT
            "dataSrc": ""
        },
        "columns": [
                { "data": "id" },
                { "data": "categorie" },
                // {"data": "date_exp"},
                // {"data": "price"  },
                // {"data": "status"},
                { "defaultContent": "<div class='text-center'><div class='btn-group'><button id='edito' class='btn btn-primary btn-sm btnEdit3'><i class='material-icons'>edit</i></button><button class='btn btn-danger btn-sm btnD3'><i class='material-icons'>delete</i></div></div>", "orderable": false }
            ]
            //<script>if(location.href == 'http://localhost/Project/admin/crud/clients.php'){var i = 0;alert(); $('#edito').css('display', 'none');}</script>

    });


    // if(location.href == "http://localhost/Project/admin/crud/clients.php"){
    //     alert("16");
    //     $(".wiw").css("display", "none !important");
    // }

    var fila; //capturer la ligne, pour modifier ou supprimer
    //soumettre pour enregistrement et mise à jour

    $('#form_cat').submit(function(e) {
        ta = $('#table_cat').DataTable();
        e.preventDefault(); //évite le comportement normal de soumettre, c'est-à-dire le rechargement total de la page
        // id = $.trim($('#id').val()); 
        //  var k = 2;
        alert(opcion);

        categorie = $.trim($('#cat').val());
        // status = $.trim($('#status').val());                            
        $.ajax({
            url: "bd/crud3.php",
            type: "POST",
            datatype: "json",
            data: { id: id, categorie: categorie, opcion: opcion },

            success: function(data) {
                ta.ajax.reload(null, false);
                // alert(id);
                // alert(username);
                // $(location).attr('href', 'bd/crud.php');
            }
        });
        $('#modalCat').modal('hide');

    });



    //para limpiar los campos antes de dar de Alta una Persona
    // $("#btnNuevo").click(function(){
    //     opcion = 1; //alta           
    //    id=null;
    //     $("#formUsuarios").trigger("reset");
    //     $(".modal-header").css( "background-color", "#17a2b8");
    //     $(".modal-header").css( "color", "white" );
    //     $(".modal-title").text("Alta de Usuario");
    //     $('#modalCRUD').modal('show');	    
    // });

    //Editar        
    $(document).on("click", ".btnEdit3", function() {
        opcion = 5; //editar
        // k =5 ;
        fila = $(this).closest("tr");
        id = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
        // nom = fila.find('td:eq(1)').text();
        categorie = fila.find('td:eq(1)').text();
        // Quantite = fila.find('td:eq(3)').text();
        // price = fila.find('td:eq(4)').text();
        // mfg = fila.find('td:eq(5)').text();
        // status = fila.find('td:eq(6)').text();
        // $("#id").val(id);
        // $("#nomMed").val(nom);
        $("#cat").val(categorie);
        alert(categorie)
            // $("#qnt").val(Quantite);
            // $("#price").val(price);
            // $("#mfg").val(mfg);
        $.ajax({ //create an ajax request to display.php

            url: "bd/crud3.php",
            type: "POST",
            data: { id: id, opcion: opcion },
            dataType: "json",

            //expect html to be returned                
            // success: function(respone){                    
            //      alert('Done!!!');
            //     // alert(data[0].date_exp);
            //     // $('#te').html("<b>id: </b>"+data.id);
            //     // $('#exp').val(data['0'].date_exp);
            // }

        });
        opcion = 2;

        // alert(location.href);
        // $("#status").val(status);
        $(".modal-header").css("background-color", "#4fbfa8");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Edit");
        $('#modalCat').modal('show');
    });

    //Borrar
    $(document).on("click", ".btnD3", function() {
        ta = $('#table_cat').DataTable();
        fila = $(this);
        id = parseInt($(this).closest('tr').find('td:eq(0)').text());
        opcion = 3; //eliminar        
        var respuesta = confirm("Are you sure you want to delete tit" + id + "?");
        if (respuesta) {
            $.ajax({
                url: "bd/crud3.php",
                type: "POST",
                datatype: "json",
                data: { opcion: opcion, id: id },
                success: function() {
                    ta.row(fila.parents('tr')).remove().draw();
                }
            });
        }
    });

    // info
    $(document).on("click", ".info3", function() {
        opcion = 5;
        fila = $(this).closest("tr");
        id = parseInt(fila.find('td:eq(0)').text());

        categorie = fila.find('td:eq(1)').text();

        $("#cat_af").html("<strong>Catégorie : </strong>" + categorie);


        $.ajax({ //create an ajax request to display.php

            url: "bd/crud3.php",
            type: "POST",
            data: { id: id, opcion: opcion },
            dataType: "json",

            //expect html to be returned                
            success: function(data) {

                // alert('Done my friend');
                // $("#exp_af").html("<strong>Date Expiration : </strong>"+data['0'].date_exp);
                alert(categorie);
            }

        });

        $('#modalInfo3').modal('show');

    });


});