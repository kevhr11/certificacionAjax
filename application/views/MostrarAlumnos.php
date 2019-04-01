<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Librerias -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
    
    <!-- Incluir los archivos js de las peticiones ajax -->
    <script src="<?php echo base_url('js/mostrarAlumno.js');?>"></script>
    <script src="<?php echo base_url('js/agregarAlumno.js');?>"></script>
    <script src="<?php echo base_url('js/modificarAlumno.js');?>"></script>
    <script src="<?php echo base_url('js/eliminarAlumno.js');?>"></script>    
    <title>Mostrar Alumnos</title>
</head>
<body>
    <br><br>
    <div class="container">
        <div class="container-fluid">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Agregar</button>
            <br><br>
            <table class="table table-bordered text-center">
                <thead class="bg-dark text-white">
                    <th>Id</th>
                    <th>Carnet</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>FechaNacimiento</th>
                    <th>Acciones</th>
                </thead>
                <tbody id="mostrar">
                    
                </tbody>
            </table>
        </div>
    </div>


    <!-- Modal Agregar -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content Agregar-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Agregar Usuario</h4>
          </div>
          <div class="modal-body">
            <label>Carnet:</label>
            <input type="text" name="carnet" class="form-control" id="carnet">
            <br>
            <label>Nombres:</label>
            <input type="text" name="nombre" class="form-control" id="nombre">
            <br>
            <label>Apellidos:</label>
            <input type="text" name="apellido" class="form-control" id="apellido">
            <br>
            <label>fecha de Nacimiento:</label>
            <input type="date" name="fecha" class="form-control" id="fecha">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" onclick="limpiar()" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success" onclick="agregar()" data-dismiss="modal">Agregar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Modificar -->
    <div id="editar" class="modal fade" role="dialog">
      <div class="modal-dialog">
      <!-- Modal content Modificar-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Modificar Usuario</h4>
          </div>
          <div class="modal-body">
            <input type="hidden" name="carnet" class="form-control" id="idModificar">
            <label>Carnet:</label>
            <input type="text" name="carnet" class="form-control" id="carnetModificar">
            <br>
            <label>Nombres:</label>
            <input type="text" name="nombre" class="form-control" id="nombreModificar">
            <br>
            <label>Apellidos:</label>
            <input type="text" name="apellido" class="form-control" id="apellidoModificar">
            <br>
            <label>fecha de Nacimiento:</label>
            <input type="date" name="fecha" class="form-control" id="fechaModificar">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success" onclick="modificar()" data-dismiss="modal">Modificar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Eliminar -->
    <div id="eliminar" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content Eliminar-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Eliminar Usuario</h4>
          </div>
          <div class="modal-body">
            <input type="hidden" name="carnet" class="form-control" id="idEliminar">
            <h4>En realidad desea eliminar al alumno: </h4>
            <label>Nombres:</label>
            <input type="text" name="nombre" class="form-control" id="nombreEliminar" disabled="true">
            <br>
            <label>Apellidos:</label>
            <input type="text" name="apellido" class="form-control" id="apellidoEliminar" disabled="true">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success" onclick="eliminar()" data-dismiss="modal">Eliminar</button>
          </div>
        </div>
      </div>
    </div>

</body>
</html>