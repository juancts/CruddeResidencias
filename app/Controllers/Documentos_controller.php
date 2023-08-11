<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Documentos_model;

class Documentos_controller extends Controller
{

    public function index()
    {
        $documento = new Documentos_model();
        $datos['documentos'] = $documento->orderBy('ANIO', 'DESC')->findAll();
        $datos['header']= view('template/header');
        $datos['footer']= view('template/footer');
        return view('documentos/listadocumentos', $datos);
    }


    public function crear(){
        $datos['header']= view('template/header');
        $datos['footer']= view('template/footer');
        return view('documentos/editardocumento', $datos);
    }
}
