<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ingredient
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Pingredient[] $pingredients
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ingredient extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pingredients()
    {
        return $this->hasMany('App\Models\Pingredient', 'id_ingredient', 'id');
    }
    

}
