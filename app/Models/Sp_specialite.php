<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Sp_specialite extends Model
{   
    use HasFactory;
    
    protected $table = 'sp_specialite';
    protected $primaryKey = 'SP_CODE_SQ_PK';
}
