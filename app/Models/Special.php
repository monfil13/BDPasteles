<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Special
 *
 * @property $id
 * @property $id_client
 * @property $id_pasteler
 * @property $descripcion
 * @property $sabor
 * @property $fechayhorapedido
 *
 * @property Client $client
 * @property Pasteler $pasteler
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Special extends Model
{
    
    static $rules = [
		'id_client' => 'required',
		'id_pasteler' => 'required',
		'descripcion' => 'required',
		'sabor' => 'required',
		'fechayhorapedido' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_client','id_pasteler','descripcion','sabor','fechayhorapedido'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function client()
    {
        return $this->hasOne('App\Models\Client', 'id', 'id_client');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pasteler()
    {
        return $this->hasOne('App\Models\Pasteler', 'id', 'id_pasteler');
    }
    

}
