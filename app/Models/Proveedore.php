<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedore
 *
 * @property $id
 * @property $Nombre_Compania
 * @property $Contacto_Name
 * @property $Contacto_Lastname
 * @property $Direccion
 * @property $Ciudad
 * @property $Estado
 * @property $Codigo_postal
 * @property $Telefono
 * @property $Email
 * @property $Metodos_de_pagos
 * @property $Tipo_descuento
 * @property $Notas
 * @property $Descuento_disponible
 * @property $Pais
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto[] $productos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedore extends Model
{
    
    static $rules = [
		'Nombre_Compania' => 'required',
		'Contacto_Name' => 'required',
		'Contacto_Lastname' => 'required',
		'Direccion' => 'required',
		'Ciudad' => 'required',
		'Estado' => 'required',
		'Codigo_postal' => 'required',
		'Telefono' => 'required',
		'Email' => 'required',
		'Metodos_de_pagos' => 'required',
		'Tipo_descuento' => 'required',
		'Notas' => 'required',
		'Descuento_disponible' => 'required',
		'Pais' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre_Compania','Contacto_Name','Contacto_Lastname','Direccion','Ciudad','Estado','Codigo_postal','Telefono','Email','Metodos_de_pagos','Tipo_descuento','Notas','Descuento_disponible','Pais'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'id_proveedores', 'id');
    }
    

}
