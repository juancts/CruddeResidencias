<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Cursos_model;

class Cursos_controller extends BaseController
{

    public function index()
    {
        $curso = new Cursos_model();
        $datos['cursos'] = $curso->orderBy('DTE_INI', 'DESC')->findAll();
        $datos['header'] = view('template/header');
        $datos['footer'] = view('template/footer');
        return view('cursos/listacursos', $datos);
    }
    public function crear(){
        $datos['header'] = view('template/header');
        $datos['footer'] = view('template/footer');
        return view('cursos/editarcurso', $datos);
    }
    public function guardar(){
        $name = $this->request->getVar("nombre");
        $dateini = $this->request->getVar("dateini");
        $datefin = $this->request->getVar("datefin");
        $horario = $this->request->getVar("horario");

       
        
        
        
    }
}
