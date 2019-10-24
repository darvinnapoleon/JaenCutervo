<?php

class alucon extends controller {

    function __construct() {
        parent::__construct();
        $this->view->alumnos = [];
    }

    function render() {
        $alumnos = $this->model->get();
        $this->view->alumnos = $alumnos;
        $this->view->render('alucon/index');
    }

    function verAlumno($param = null) {
        //var_dump($param);
        $idAlumno = $param[0];
        $alumno = $this->model->getById($idAlumno);
        session_start();
        $_SESSION['idVerAlumno'] = $alumno->matricula;
        $this->view->mensaje = "";
        $this->view->alumno = $alumno;
        $this->view->render('alucon/detalle');
    }

    function actualizarAlumno() {
        session_start();
        $matricula = $_SESSION['idVerAlumno'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        unset($_SESSION['idVerAlumno']);
        if ($this->model->update(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido])) {
            $alumno = new Alumno();
            $alumno->matricula = $matricula;
            $alumno->nombre = $nombre;
            $alumno->apellido = $apellido;
            $this->view->alumno = $alumno;
            $this->view->mensaje = "Alumno actualizado correctamente";
        } else {
            $this->view->mensaje = "No se pudo actualizar el alumno";
        }
        $this->view->render('alucon/detalle');
    }

    function eliminarAlumno($param = null) {
        $matricula = $param[0];
        if ($this->model->delete($matricula)) {
            $mensaje = "Alumno eliminado correctamente";
        } else {
            $mensaje = "No se pudo eliminar el alumno";
        }
        echo $mensaje;
    }

}
