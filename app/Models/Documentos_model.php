<?php 
namespace App\Models;

use CodeIgniter\Model;

class Documentos_model extends Model{
    protected $table      = 'upimir_documentacion';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['TXT_NOMBRE','ANIO', 'KEY_DOC'];
}