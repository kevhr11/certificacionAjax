$(document).ready(datos);

function datos(){
    $.ajax({
        method:'post',
        url:'http://localhost/certificacion/index.php/alumnoController/listar',
        success:listarAlumnos,
        error:errorAlumnos
    });
}

function listarAlumnos(r){
    let listar = r.listar;
    // console.log(listar);
    listar.forEach(element => {
        $('#mostrar').append('<tr>'+
                        '<td>'+element.Id+'</td>'+
                        '<td>'+element.Carnet+'</td>'+
                        '<td>'+element.Nombres+'</td>'+
                        '<td>'+element.Apellidos+'</td>'+
                        '<td>'+element.FechaNacimiento+'</td>'+
                        '<td>'+
                        '<button type="button" class="btn btn-warning" onclick="listarAlumnoModificar('+element.Id+')" data-toggle="modal" data-target="#editar">Modificar</button> | '+
                        '<button type="button" class="btn btn-danger" onclick="listarAlumnoEliminar('+element.Id+')" data-toggle="modal" data-target="#eliminar">Eliminar</button>'+
                        '</td>'+
                        '</tr>');    
    });

}
function errorAlumnos(e){
    alert(e);
}