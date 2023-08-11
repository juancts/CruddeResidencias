<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Residencias_model;

class Residencias_controller extends Controller
{
    public function index()
    {

        $residencia = new Residencias_model();
        $datos['residencias'] = $residencia->orderBy('KEY_RESIDENCIA', 'ASC')->findAll();
        $datos['header'] = view('template/header');
        $datos['footer'] = view('template/footer');

        return view('residencias/listaresidencias', $datos);
    }

    public function crear()
    {

        $datos['header'] = view('template/header');
        $datos['footer'] = view('template/footer');
        return view('residencias/editarresidencia', $datos);
    }
}
