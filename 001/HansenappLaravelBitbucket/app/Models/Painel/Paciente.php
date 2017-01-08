<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;
use App\Models\Painel\Contato;

class Paciente extends Model
{
	
	protected $fillable = ['id_ubs','id_contato','nome','numero_sinan','telefone'];

	public function rules()
	{
		return [
		"nome" => "required | min:3 | max: 60",
		];
	}

	public function rulesEditar()
	{
		return [
		"nome" => "required",
		"numero_sinan" => "required",
		"telefone" => "required",
		];
	}

	public function messages()
	{
		return [

		'required' => 	'O :attribute é obrigatório!',
		'min'	  =>	'O :attribute deve conter no mínimo 8 caracteres!',
		'max' 	  =>	'O :attribute deve conter no máximo 60 caracteres!',

		];
	}

	public function umMuitos()
	{
		return $this->hasMany('App\Models\Painel\Contato','id_paciente','id');
	}

	public function umMuitosUBSPac()
	{
		return $this->hasMany('App\Models\Painel\UBS','id','id_ubs');
	}

	public static function numeroContatos(){
		$countContatos = \DB::select(\DB::raw(

                // "
                // (SELECT *,(SELECT COUNT(*) FROM contatos 
                //  WHERE contatos.id_paciente = pacientes.id) as numeroContatos
                //  FROM pacientes LEFT JOIN u_b_s as u
                //   on pacientes.id_ubs = u.id)"

			" (SELECT *,
			  (SELECT COUNT(*) as contar FROM contatos WHERE contatos.id_paciente = pacientes.id) as numeroContatos, 
			  (SELECT u_b_s.nome FROM u_b_s) as ubsNome,
			  (SELECT pacientes.id FROM u_b_s) as id,
			  (SELECT pacientes.nome FROM u_b_s) as nome
			  FROM pacientes LEFT JOIN u_b_s as u on pacientes.id_ubs = u.id)"
		));

		return $countContatos;

	}

}
