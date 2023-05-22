<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Alimento
 *
 * @property $id
 * @property $nombre
 * @property $libras
 * @property $descripcion
 * @property $precio
 * @property $lote
 * @property $fechacaducidad
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Alimento extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'libras' => 'required',
		'descripcion' => 'required',
		'precio' => 'required',
		'lote' => 'required',
		'fechacaducidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','libras','descripcion','precio','lote','fechacaducidad'];



}
