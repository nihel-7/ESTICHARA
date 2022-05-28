<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regle extends Model
{
	use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
	protected $fillable = [
        'regle',
        'type_regle',
        'element',
        'inf',
        'sub',
        'class_id',
        'active',
        'mmte_id',
    ];


 	public function medicament() {
 		return $this->belongsToMany('App\Models\Sac_subactive' , 'regle_medicament' ,'regle_id' ,'medicament_id');
 	// SQL: 
 		//select `sac_subactive`.*, `regle_medicament`.`regle_id` as `pivot_regle_id`, 
 		// `regle_medicament`.`medicament_id` as `pivot_medicament_id` 
 		// from `sac_subactive` 
 		// inner join `regle_medicament` on `sac_subactive`.`SAC_CODE_SQ_PK` = `regle_medicament`.`medicament_id` 
 		// where `regle_medicament`.`regle_id` = 24
 	}
}
