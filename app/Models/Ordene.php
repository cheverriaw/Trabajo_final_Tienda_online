<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ordene
 *
 * @property $id
 * @property $id_cliente
 * @property $Numero_Orden
 * @property $id_pagos
 * @property $Fecha_de_envio
 * @property $Estado_transacción
 * @property $Pagado
 * @property $Fecha_de_pago
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Detallepedido[] $detallepedidos
 * @property Pago $pago
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ordene extends Model
{
    
    static $rules = [
		'Numero_Orden' => 'required',
		'Fecha_de_envio' => 'required',
		'Estado_transacción' => 'required',
		'Pagado' => 'required',
		'Fecha_de_pago' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_cliente','Numero_Orden','id_pagos','Fecha_de_envio','Estado_transacción','Pagado','Fecha_de_pago'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'id_cliente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detallepedidos()
    {
        return $this->hasMany('App\Models\Detallepedido', 'id_ordenes', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pago()
    {
        return $this->hasOne('App\Models\Pago', 'id', 'id_pagos');
    }
    

}
