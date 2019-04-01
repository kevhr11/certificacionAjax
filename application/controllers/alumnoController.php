<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alumnoController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('alumnoModel');
        $this->load->helper('url');
        $this->load->database('default');
    }
    //Mostrar
        //Metodo para enviar a la vistar MostrarAlumnos
        public function mostrar()
        {
            $this->load->view('MostrarAlumnos.php');
        }

        //Metodo para mostrar todos los alumnos
        public function listar(){
            $data['listar'] = $this->alumnoModel->mostrarAlumnos();
            $this->output->set_header('Content-Type: application/json charset-utf-8');
            echo json_encode($data);
        }

        //Metodo para seleccionar un alumno
        public function listarAlumno(){
            $id = $this->input->post('Id');
            $data['listarAlumno'] = $this->alumnoModel->seleccionarAlumno($id);
            $this->output->set_header('Content-Type: application/json charset-utf-8');
            echo json_encode($data);
        }

    //Agregar
        //Metodo para agregar alumnos
            public function insertarAlumnos()
            {
                $carnet = $this->input->post('Carnet');
                $nombre = $this->input->post('Nombres');
                $apellido = $this->input->post('Apellidos');
                $fecha = $this->input->post('FechaNacimiento');
                $data['agregarAlumno'] = $this->alumnoModel->agregarAlumno($carnet, $nombre, $apellido, $fecha);
            }

    //Modificar
        //Metodo para modificar alumnos
            public function updateAlumnos()
            {   
                $id = $this->input->post('Id');
                $carnet = $this->input->post('Carnet');
                $nombre = $this->input->post('Nombres');
                $apellido = $this->input->post('Apellidos');
                $fecha = $this->input->post('FechaNacimiento');
                $data['updateAlumno'] = $this->alumnoModel->updateAlumno($id, $carnet, $nombre, $apellido, $fecha);
            }

    //Eliminar
        //Metodo para eliminar alumnos
            public function deleteAlumnos()
            {   
                $id = $this->input->post('Id');
                $data['eliminarAlumno'] = $this->alumnoModel->eliminarAlumno($id);
            }
	
}
