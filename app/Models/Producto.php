<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $nombre_producto
 * @property $descripcion_producto
 * @property $id_categorias
 * @property $id_proveedores
 * @property $precio_unitario
 * @property $calidad_unidad
 * @property $talla_disponible
 * @property $colores_disponible
 * @property $tamano
 * @property $color
 * @property $peso_unidad
 * @property $unidad_Stock
 * @property $unidad_orden
 * @property $producto_disponible
 * @property $descuento_disponible
 * @property $orden_actual
 * @property $imagenes
 * @property $clasificacion
 * @property $nota
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property Detallepedido[] $detallepedidos
 * @property Proveedore $proveedore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'nombre_producto' => 'required',
		'descripcion_producto' => 'required',
		'precio_unitario' => 'required',
		'calidad_unidad' => 'required',
		'talla_disponible' => 'required',
		'colores_disponible' => 'required',
		'tamano' => 'required',
		'color' => 'required',
		'peso_unidad' => 'required',
		'unidad_Stock' => 'required',
		'unidad_orden' => 'required',
		'producto_disponible' => 'required',
		'descuento_disponible' => 'required',
		'orden_actual' => 'required',
		'imagenes' => 'required',
		'clasificacion' => 'required',
		'nota' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_producto','descripcion_producto','id_categorias','id_proveedores','precio_unitario','calidad_unidad','talla_disponible','colores_disponible','tamano','color','peso_unidad','unidad_Stock','unidad_orden','producto_disponible','descuento_disponible','orden_actual','imagenes','clasificacion','nota'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'id_categorias');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detallepedidos()
    {
        return $this->hasMany('App\Models\Detallepedido', 'id_productos', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proveedore()
    {
        return $this->hasOne('App\Models\Proveedore', 'id', 'id_proveedores');
    }
    

}
