<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $Nombre
 * @property $Apellido
 * @property $Clase
 * @property $Direccion
 * @property $Estado
 * @property $Pais
 * @property $Telefono
 * @property $Email
 * @property $Password
 * @property $Targeta_Credito
 * @property $created_at
 * @property $updated_at
 *
 * @property Ordene[] $ordenes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Apellido' => 'required',
		'Clase' => 'required',
		'Direccion' => 'required',
		'Estado' => 'required',
		'Pais' => 'required',
		'Telefono' => 'required',
		'Email' => 'required',
		'Password' => 'required',
		'Targeta_Credito' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Apellido','Clase','Direccion','Estado','Pais','Telefono','Email','Password','Targeta_Credito'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ordenes()
    {
        return $this->hasMany('App\Models\Ordene', 'id_cliente', 'id');
    }
    

}
