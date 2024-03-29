<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PathMedAssociation extends Model
{
    use HasFactory;
    protected $table = 'spccl_specialite_classecl';
    public $timestamps = false;
	public $incrementing = false; // say that primary key is not ai
	public $keyType = 'string'; //say that type of primary key is not integer
}
