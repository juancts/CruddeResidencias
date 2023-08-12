<?php 
namespace App\Models;

use CodeIgniter\Model;

class Cursos_model extends Model{
    protected $table      = 'upimir_cursos';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['KEY_CURSO', 'TXT_NOMBRE','DTE_INI', 'DTE_END','TXT_HORARIO', 'TXT_DIRECCION', 'IND_ACTIVE', 'IND_ESTADO', 'FORMADORES', 'INFORMACION','PLAZAS','PRECIO','FILE'];
}