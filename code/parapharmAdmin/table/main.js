$(document).ready(function() {
    var id, option;
    option = 4;
        
    tablaUsuarios = $('#tablaUsuarios').DataTable({  
        "ajax":{            
            "url": "bd/crud.php", 
            "method": 'POST', //usamos el metodo POST
            "data":{option:option}, //enviamos option 4 para que haga un SELECT
            "dataSrc":""
        },
        "columns":[
            {"data": "id"},
            {"data": "nom_utilisateur"},
            {"data": "nom"},
            {"data": "email"},
            {"data": "civilite"},
            {"data": "telephone"},
            
            {"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btnEditar'><i class='material-icons'>edit</i></button><button class='btn btn-danger btn-sm btnBorrar'><i class='material-icons'>delete</i></button></div></div>"}
        ]
    });
});   