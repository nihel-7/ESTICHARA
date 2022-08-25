<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergie extends Model
{
    protected $table = 'allergie';//cdf_codif
    public $timestamps = false;
	public $incrementing = false; // say that primary key is not ai
	public $keyType = 'string'; //say that type of primary key is not integer
}
