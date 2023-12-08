<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pasteler
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $alias
 * @property $telefono
 * @property $añostrabajados
 * @property $created_at
 * @property $updated_at
 *
 * @property Special[] $specials
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pasteler extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'alias' => 'required',
		'telefono' => 'required',
		'añostrabajados' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','alias','telefono','añostrabajados'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function specials()
    {
        return $this->hasMany('App\Models\Special', 'id_pasteler', 'id');
    }
    

}
