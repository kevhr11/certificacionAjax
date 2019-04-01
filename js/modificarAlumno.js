//---------------Modificar------------------------
function listarAlumnoModificar(id){
    $.ajax({
        method: 'post',
        url:'http://localhost/certificacion/index.php/alumnoController/listarAlumno',
        data:{
            Id:id
        },
        success:mostrarAlumno,
        error:errorMostrar
    });
}

function mostrarAlumno(m){
    let listar = m.listarAlumno[0];
    $('#idModificar').val(listar.Id);
    $('#carnetModificar').val(listar.Carnet);
    $('#nombreModificar').val(listar.Nombres);
    $('#apellidoModificar').val(listar.Apellidos);
    $('#fechaModificar').val(listar.FechaNacimiento);
}

function errorMostrar(e){
    alert(e);
}

function modificar(){
    $('#mostrar').html("");
    let id = $('#idModificar').val();
    let carnet = $('#carnetModificar').val();
    let nombre = $('#nombreModificar').val();
    let apellido = $('#apellidoModificar').val();
    let fecha = $('#fechaModificar').val();
    // console.log(fecha);
    $.ajax({
        method:'post',
        url:'http://localhost/certificacion/index.php/alumnoController/updateAlumnos',
        data:{
            Id:id,
            Carnet:carnet,
            Nombres:nombre,
            Apellidos:apellido,
            FechaNacimiento:fecha
        },
        success:modificarAlumno,
        error:errorModificar
    });
}

function modificarAlumno(m){
    datos();
}

function errorModificar(e){
    alert(e);
}