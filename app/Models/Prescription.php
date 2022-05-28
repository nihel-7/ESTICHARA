<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    public function lignes () {
    	return $this->hasMany('App\Models\Ligneprescription');
    }
    public function prescripteur() {
    	return $this->belongsTo('App\User','created_by');
    }
    public function intervention () {
    	return $this->hasOne('App\Models\Intervention');
    }
}
