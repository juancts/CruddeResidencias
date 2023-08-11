<?php 
namespace App\Models;

use CodeIgniter\Model;

class Cursos_model extends Model{
    protected $table      = 'upimir_cursos';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['TXT_NOMBRE','DTE_INI', 'KEY_CURSO'];
}