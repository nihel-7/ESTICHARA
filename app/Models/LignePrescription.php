<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ligneprescription extends Model
{
    public function medicaments () {
    	return $this->belongsToMany('App\Models\Sac_subactive','ligneprescription_sac_subactive','ligneprescription_id','sac_subactive_id'); // default table : ligneprescription_sac_subactive
    }
}
