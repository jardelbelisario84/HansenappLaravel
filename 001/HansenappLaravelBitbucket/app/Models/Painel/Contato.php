<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
	protected $table= "contatos";
	protected $fillable = ['nome','situacao','status', 'telefone','id_paciente'];

    public  function rules()
	{
		return [

		"nome" => "required",
		"situacaoparentesco" => "required",
		"status" => "required",
		"telefone" => "required",
		"id_paciente" => "required",

		];
	}

	public  function rulesEditar($id)
	{
		//return rules();

		return [

		"nome" => "required",
		"parentesco" => "required",
		"status" => "required",
		"telefone" => "required",
		"id_paciente" => "required",

		];
	}

	public function umMuitos()
	{
		return $this->hasMany('App\Models\Painel\Paciente','id','id_paciente');
	}
}
