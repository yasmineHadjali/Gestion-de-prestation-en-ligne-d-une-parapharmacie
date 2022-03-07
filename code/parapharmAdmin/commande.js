$(document).ready(function() {
    var id, opcion;
    opcion = 4;

    tabla = $('#table_cmd').DataTable({
        "ajax": {
            "url": "bd/crudcmd.php",
            "method": 'POST', //nous utilisons la méthode POST
            "data": { opcion: opcion }, //nous envoyons l'option 4 pour faire un SELECT
            "dataSrc": ""
        },
        "columns": [
                { "data": "id_com" },
                { "data": "email" },
                { "data": "Com_client" },
                { "data": "Com_montant" },
                { "data": "Com_date" },
                // {"data": "Article_Qte"},
                // {"data": "date_exp"},
                // {"data": "price"  },
                // {"data": "status"},
                { "defaultContent": "<div class='text-center'><div class='btn-group'><button id='edito' class='btn btn-primary btn-sm btnEcmd'><i class='material-icons'>edit</i></button><button class='btn btn-danger btn-sm btnDC'><i class='material-icons'>delete</i></div></div>", "orderable": false }
            ]
            //<script>if(location.href == 'http://localhost/Project/admin/crud/clients.php'){var i = 0;alert(); $('#edito').css('display', 'none');}</script>

    });


    // if(location.href == "http://localhost/Project/admin/crud/clients.php"){
    //     alert("16");
    //     $(".wiw").css("display", "none !important");
    // }

    var fila; //capturer la ligne, pour modifier ou supprimer
    //soumettre pour enregistrement et mise à jour

    $('#form_cmd').submit(function(e) {
        t = $('#table_cmd').DataTable();
        e.preventDefault(); //évite le comportement normal de soumettre, c'est-à-dire le rechargement total de la page
        // id = $.trim($('#id').val()); 
        //  var k = 2;
        // alert(opcion);
        code = $.trim($('#codeCom').val());
        // code = $.trim($('#codeMed').val());
        eml = $.trim($('#emlCom').val());

        // prix = $.trim($('#priceMed').val());    
        // Qte = $.trim($('#qteMed').val());
        mnt = $("#mntCom").val();
        date = $("#dateCom").val();
        // status = $.trim($('#status').val());                            
        $.ajax({
            url: "bd/crudcmd.php",
            type: "POST",
            datatype: "json",
            data: { id_com: id, Com_client: code, Com_montant: mnt, Com_date: date, email: eml, opcion: opcion },

            success: function(data) {
                t.ajax.reload(null, false);
                // alert(id);
                // alert(username);
                // $(location).attr('href', 'bd/crud.php');
                // alert('hello');
            }
        });
        $('#modalCRUD_cmd').modal('hide');

    });



    //para limpiar los campos antes de dar de Alta una Persona
    // $("#btnNuevo").click(function(){
    //     opcion = 1; //alta           
    //    id=null;
    //     $("#formUsuarios").trigger("reset");
    //     $(".modal-header").css( "background-color", "#17a2b8");
    //     $(".modal-header").css( "color", "white" );
    //     $(".modal-title").text("Alta de Usuario");
    //     $('#modalCRUD_prd_prd').modal('show');	    
    // });

    //Editar        
    $(document).on("click", ".btnEcmd", function() {
        opcion = 5; //editar
        // k =5 ;
        fila = $(this).closest("tr");
        id = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
        email = fila.find('td:eq(1)').text();
        code = fila.find('td:eq(2)').text();
        mnt = fila.find('td:eq(3)').text();
        date = fila.find('td:eq(4)').text();
        // qte = fila.find('td:eq(5)').text();
        // status = fila.find('td:eq(6)').text();
        $("#id").val(id);
        $("#codeCom").val(code);
        $("#emlCom").val(email);
        $("#mntCom").val(mnt);
        $("#dateCom").val(date);
        // $("#qteMed").val(qte);
        $.ajax({ //create an ajax request to display.php

            url: "bd/crudcmd.php",
            type: "POST",
            data: { id_com: id, opcion: opcion },
            dataType: "json",

            //expect html to be returned                
            success: function(data) {

                // alert(data[0].date_exp);
                // $('#te').html("<b>id: </b>"+data.id);
                // $('#exp').val(data['0'].date_exp);
            }

        });
        opcion = 2;

        // alert(location.href);
        // $("#status").val(status);
        $(".modal-header").css("background-color", "#4fbfa8");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Edit");
        $('#modalCRUD_cmd').modal("show");
    });

    //Borrar
    $(document).on("click", ".btnDC", function() {
        t = $('#table_cmd').DataTable();
        fila = $(this);
        id = parseInt($(this).closest('tr').find('td:eq(0)').text());
        opcion = 3; //eliminar        
        var respuesta = confirm("Are you sure you want to delete " + id + "?");
        if (respuesta) {
            $.ajax({
                url: "bd/crudcmd.php",
                type: "POST",
                datatype: "json",
                data: { opcion: opcion, id_com: id },
                success: function() {
                    //   alert("dude");
                    //   tabla.row(fila.parents('tr')).remove().draw();    
                    t.row(fila.parents('tr')).remove().draw();
                    //   alert("dude");
                }
            });
        }
    });

    // info
    // $(document).on("click", ".infocmd", function(){
    //     opcion = 5;

    //      fila = $(this).closest("tr");	        
    //      id = parseInt(fila.find('td:eq(0)').text());                     
    //      code = fila.find('td:eq(1)').text();
    //      nom = fila.find('td:eq(2)').text();
    //      prix = fila.find('td:eq(3)').text();
    //      cat = fila.find('td:eq(4)').text();
    //      qte = fila.find('td:eq(5)').text();

    //      $("#codeMed_af").html("<strong>Code Médicament: </strong>"+code);
    //      $("#nom_af").html("<strong>Nom Médicament : </strong>"+nom);
    //      $("#prix_af").html("<strong>Prix : </strong>"+prix);
    //      $("#cat_af").html("<strong>Catégorie : </strong>"+cat);
    //      $("#qte_af").html("<strong>Quantité : </strong>"+qte);


    //      $.ajax({    //create an ajax request to display.php

    //         url: "bd/crud2.php",             
    //         type: "POST",
    //         data: {id_Articles: id ,opcion: opcion},
    //         dataType: "json",

    //             //expect html to be returned                
    //         success: function(data){                    
    //             // console.log("YOOO");
    //             // alert("YOOO");
    //             // $("#mfg_af").html("<strong>Date MFG : </strong>"+data['0'].date_mfg);
    //             // $("#exp_af").html("<strong>Date Expiration : </strong>"+data['0'].date_exp);
    //             // $("#img_af").html("<strong> Image : </strong>");
    //             // $('#img_info').attr("src", "../image/ordonnance/"+data['0'].image);

    //         }

    //     });

    //     $('#modalInfo2').modal('show'); 

    // });


});