<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class UBS extends Model
{

	protected $table = "u_b_s";
	protected $fillable = ['nome','bairro','rua', 'numero'];

	public  function rules()
	{
		return [

		"nome" => "required|unique:u_b_s",
		"bairro" => "required",
		"rua" => "required",
		"numero" => "required",

		];
	}

	public  function rulesEditar($id)
	{
		return [

		"nome" => "required|unique:u_b_s,nome,{$id}",
		"bairro" => "required",
		"rua" => "required",
		"numero" => "required",

		];
	}
}
