<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Factory;
use App\Models\Painel\Paciente;

class PacientesController extends Controller
{


	private $paciente;
	private $request;

	public function __construct(Paciente $paciente, Request $request)
	{
		$this->paciente = $paciente;
		$this->request = $request;
	}

	public function index()
	{

		return $this->paciente->all();

	}

	public function show($id)
	{
		return $this->paciente->find($id);
	}

	public function store()
	{
		$dados = $this->request->all();
		//$ubsList = \App\Models\Painel\UBS::lists("nome","id");
		
		//$dadosForm = $this->request->all();
		// $validator = $this->validator->make($dadosForm, $this->model->rules());

		// if ($validator->fails()) {

		// 	return redirect("panel/{$this->pastaView}/adicionar")->withErrors($validator)->withInput();
		// }

		//return $this->paciente->create($dados);
		return  response()->json($this->paciente->create($dados));

		// $mensagem = "Cadastrado de {$this->pastaView } realizado com sucesso";
		// return redirect("panel/{$this->pastaView}/adicionar")->with('mensagem', $mensagem);
	}

	public function edit($id)
	{
		return $this->paciente->find($id);

	}	

	public function update($id)
	{
		$paciente = $this->paciente->find($id);
		$dados = $this->request->all();

		return response()->json($paciente->update($dados));
	}

	public function destroy($id)
	{
		$paciente = $this->paciente->find($id);
		// $paciente = $this->paciente->find($id)->delete();
		// dd($paciente);
		//return $paciente->delete();
		//$this->paciente->find($id)->delete($id);
		//dd($this->paciente->find($id)->delete());
		//return "deletado";
		return response()->json($paciente->delete());
	}


}
