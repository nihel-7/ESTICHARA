<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
	public $timestamps = false;
    public function lignesIP () {
    	return $this->hasMany('App\Models\LigneIntervention');
    }

    public function analyseur() {
    	return $this->belongsTo('App\User','created_by');
    }

        public function executeur() {
    	return $this->belongsTo('App\User','updated_by');
    }
}
