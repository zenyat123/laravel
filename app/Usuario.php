<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
   
   	protected $primaryKey = "id_usuario";
	public $timestamps = false;

	public function scopeBuscador($consulta, $buscar_por, $buscador)
	{

		if($buscar_por && $buscador)
		{

			return $consulta->where($buscar_por, "like", "%$buscador%");

		}

	}
   
}