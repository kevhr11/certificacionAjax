//-----------------Agrear usuario-------------------------
function agregar(){
    $('#mostrar').html("");
    let carnet = $('#carnet').val();
    let nombre = $('#nombre').val();
    let apellido = $('#apellido').val();
    let fecha = $('#fecha').val();
    $.ajax({
        method:'post',
        url:'http://localhost/certificacion/index.php/alumnoController/insertarAlumnos',
        data:{
            Carnet:carnet,
            Nombres:nombre,
            Apellidos:apellido,
            FechaNacimiento:fecha
        },
        success:agregarUsuario,
        error:errorAgregar
    });
}

function agregarUsuario(){
    datos();
}

function errorAgregar(){

}

function limpiar(){
    $('#carnet').val(" ");
    $('#nombre').val(" ");
    $('#apellido').val(" ");
    $('#fecha').val(" ");
}