<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sucursal
 *
 * @property $id
 * @property $nombre
 * @property $direccion
 * @property $ciudad
 * @property $nombrerecepcionista
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sucursal extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'direccion' => 'required',
		'ciudad' => 'required',
		'nombrerecepcionista' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','direccion','ciudad','nombrerecepcionista'];



}
