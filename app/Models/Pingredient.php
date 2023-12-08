<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pingredient
 *
 * @property $id
 * @property $id_cake
 * @property $id_ingredient
 * @property $cantidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Cake $cake
 * @property Ingredient $ingredient
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pingredient extends Model
{
    
    static $rules = [
		'id_cake' => 'required',
		'id_ingredient' => 'required',
		'cantidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_cake','id_ingredient','cantidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cake()
    {
        return $this->hasOne('App\Models\Cake', 'id', 'id_cake');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ingredient()
    {
        return $this->hasOne('App\Models\Ingredient', 'id', 'id_ingredient');
    }
    

}
