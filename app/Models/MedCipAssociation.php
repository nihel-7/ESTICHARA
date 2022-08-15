<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedCipAssociation extends Model
{
    use HasFactory;
    protected $table = 'fcpmsp_cipemg_sp';
    public $timestamps = false;
	public $incrementing = false; // say that primary key is not ai
}
