<?php 
namespace App\Models;

use CodeIgniter\Model;

class Residencias_model extends Model{
    protected $table = 'upimir_residencias';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['KEY_RESIDENCIA','TXT_NOMBRE','URL','EMAIL','TELEFONO','CONTACTO', 'TXT_IMG'];
}