<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContreindicationP extends Model
{
    use HasFactory;
    protected $table = 'fcpmtx_fichecipemg_texte';
    public $timestamps = false;
	public $incrementing = false; // say that primary key is not ai
}
