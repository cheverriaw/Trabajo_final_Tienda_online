<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pago
 *
 * @property $id
 * @property $Tipo_de_pago
 * @property $Permitido
 *
 * @property Ordene[] $ordenes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pago extends Model
{
    
    static $rules = [
		'Tipo_de_pago' => 'required',
		'Permitido' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Tipo_de_pago','Permitido'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ordenes()
    {
        return $this->hasMany('App\Models\Ordene', 'id_pagos', 'id');
    }
    

}
