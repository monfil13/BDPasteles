<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pedit
 *
 * @property $id
 * @property $id_client
 * @property $fechapedido
 * @property $created_at
 * @property $updated_at
 *
 * @property Client $client
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pedit extends Model
{
    
    static $rules = [
		'id_client' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_client','fechapedido'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function client()
    {
        return $this->hasOne('App\Models\Client', 'id', 'id_client');
    }
    

}
