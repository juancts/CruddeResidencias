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
        
        $curso = new Cursos_model();  
        $estado = $this->request->getVar('estado');
        if($estado == 'activo'){
            $estado = 1;
        }else if($estado == 'inactivo'){
            $estado = 0;
        }else{
            $estado = -1;
        }
        $file=$this->request->getFile('file');

        if($file->isValid()){
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . 'public/files', $newName);
        }else{
            $newName='';
        }
        $datos=[
        'TXT_NOMBRE' => $this->request->getVar("nombre"),
        'DTE_INI' => $this->request->getVar("dateini"),
        'DTE_END' => $this->request->getVar("datefin"),
        'TXT_HORARIO' => $this->request->getVar("horario"),
        'PLAZAS' => $this->request->getVar("vacantes"),
        'PRECIO' => $this->request->getVar("precio"),
        'IND_ESTADO' => $estado,
        'FORMADORES' => $this->request->getVar("formadors"),
        'INFORMACION' => $this->request->getVar("descripcion"),
        'FILE' => $newName
        ];
        
       try {
        $curso->insert($datos); 
        echo "Ingresado Correctamente";
       } catch (\Throwable $th) {
        throw($th);
       }      
    }
    public function borrar($id=null){

        $curso = new Cursos_model();
        $datoscurso=$curso->where('KEY_CURSO', $id)->first();
        $filesrute = ('../public/files/'.$datoscurso['FILE']);
        

        if (file_exists($filesrute)) {
            unlink($filesrute);
            echo "Archivo borrado: " . $datoscurso['FILE'] . "<br>";
        } else {
            echo "El archivo no existe: " . $datoscurso['FILE'] . "<br>";
        }

        $curso->where('KEY_CURSO', $id)->delete();

         // Botón de Volver
         echo '<a href="' . site_url('/cursos') . '" class="btn btn-primary" style="margin-top: 10px;">Volver a Cursos</a>';

        //return $this->response->redirect(site_url('/cursos'));



    }
}
