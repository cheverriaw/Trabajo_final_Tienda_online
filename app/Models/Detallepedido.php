<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detallepedido
 *
 * @property $id
 * @property $id_productos
 * @property $id_ordenes
 * @property $Numero_orden
 * @property $Precio
 * @property $Calidad
 * @property $Descuento
 * @property $Total
 * @property $Tamano
 * @property $Color
 * @property $Fecha_envio
 * @property $Order_Detalle_id
 * @property $Fecha_de_pago
 * @property $created_at
 * @property $updated_at
 *
 * @property Ordene $ordene
 * @property Producto $producto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Detallepedido extends Model
{
    
    static $rules = [
		'Numero_orden' => 'required',
		'Precio' => 'required',
		'Calidad' => 'required',
		'Descuento' => 'required',
		'Total' => 'required',
		'Tamano' => 'required',
		'Color' => 'required',
		'Fecha_envio' => 'required',
		'Order_Detalle_id' => 'required',
		'Fecha_de_pago' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_productos','id_ordenes','Numero_orden','Precio','Calidad','Descuento','Total','Tamano','Color','Fecha_envio','Order_Detalle_id','Fecha_de_pago'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ordene()
    {
        return $this->hasOne('App\Models\Ordene', 'id', 'id_ordenes');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'id_productos');
    }
    

}
