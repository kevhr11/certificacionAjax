//---------------------Eliminar-------------------------
function listarAlumnoEliminar(id){
    $.ajax({
        method: 'post',
        url:'http://localhost/certificacion/index.php/alumnoController/listarAlumno',
        data:{
            Id:id
        },
        success:mostrarAlumnoEliminar,
        error:errorMostrarEliminar
    });
}

function mostrarAlumnoEliminar(m){
    let listar = m.listarAlumno[0];
    $('#idEliminar').val(listar.Id);
    $('#carnetEliminar').val(listar.Carnet);
    $('#nombreEliminar').val(listar.Nombres);
    $('#apellidoEliminar').val(listar.Apellidos);
    $('#fechaEliminar').val(listar.FechaNacimiento);
}

function errorMostrarEliminar(e){
    alert(e);
}


function eliminar(){
    $('#mostrar').html("");
    let id = $('#idEliminar').val();
    let carnet = $('#carnetEliminar').val();
    let nombre = $('#nombreEliminar').val();
    let apellido = $('#apellidoEliminar').val();
    let fecha = $('#fechaEliminar').val();
    // console.log(fecha);
    $.ajax({
        method:'post',
        url:'http://localhost/certificacion/index.php/alumnoController/deleteAlumnos',
        data:{
            Id:id
        },
        success:eliminarAlumno,
        error:errorEliminar
    });
}

function eliminarAlumno(m){
    datos();
}

function errorEliminar(e){
    alert(e);
}