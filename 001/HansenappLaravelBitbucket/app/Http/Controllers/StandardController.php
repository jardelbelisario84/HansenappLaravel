<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Painel\UBS;
use DB;

//use App\Models\Painel\Paciente;

use App\User;

abstract class StandardController extends BaseController
{
	use DispatchesJobs, ValidatesRequests;

	protected $ubs;

	public function __construct(UBS $ubs){
		$this->ubs = $ubs;
	}



	protected $totalItensPagina = 10;

	// METODO PARA LISTAGEM
	//metodo da listagem de todos os dados
	public function getIndex()
	{
		//$data = $this->model->paginate($this->totalItensPagina);
		$data = $this->model->all();

		$titulo = "Listagem de {$this->titulo} | Painel Administrativo | Hansenapp Web";

		return view("painel.".$this->pastaView.".listagem", compact('titulo','data'));	
	}

	//metodo da listagem de apenas um dado
	public function getListar($id)
	{
		$dataCount = $this->model->find($id)->umMuitos()->get()->count();
		$dataUmMuitos = $this->model->find($id)->umMuitos()->get();

		$dataListar = $this->model->find($id);
		$titulo = "Listagem de {$this->titulo} | Painel Administrativo | Hansenapp Web";
		return view("painel.".$this->pastaView.".listar", compact('titulo','dataListar','dataCount','dataUmMuitos'));
	}


	// METODOS PARA ADICIONAR
	public function getAdicionar()
	{
		$ubsList = \App\Models\Painel\UBS::all();
		$pacienteList = \App\Models\Painel\Paciente::all();
		$titulo = "Adicionar Usuarios! Painel Administrativo | Hansenapp Web";
		return view("painel.".$this->pastaView.".adicionar", compact('titulo','ubsList','pacienteList','ubsList'));
	}

	public function postAdicionar()
	{	
		$ubsList = \App\Models\Painel\UBS::lists("nome","id");
		
		$dadosForm = $this->request->all();
		$validator = $this->validator->make($dadosForm, $this->model->rules());

		if ($validator->fails()) {

			return redirect("panel/{$this->pastaView}/adicionar")->withErrors($validator)->withInput();
		}


		$this->model->create($dadosForm);

		$mensagem = "Cadastrado de {$this->pastaView } realizado com sucesso";
		return redirect("panel/{$this->pastaView}/adicionar")->with('mensagem', $mensagem);

	}



	// METODOS PARA EDITAR
	public function getEditar($id)
	{	

		//$list = $this->model->find($id)->umMuitos()->get()->toArray();
		$list = $this->model->find($id)->umMuitos()->get()->toArray();
		//dd($list);
		$ubsLists = \App\Models\Painel\UBS::all();
		$pacienteList = \App\Models\Painel\Paciente::all();

		$dataEditar = $this->model->find($id);
		$titulo = "Editar {$this->titulo}! Painel Administrativo | Hansenapp Web";
		return view("painel.".$this->pastaView.".editar", compact('titulo','dataEditar','ubsLists','pacienteList','list'));


	}

	public function postEditar($id)
	{

		
		$dataEditar = $this->model->find($id);

         //$dadosForm = $this->request->except('image');
		$dadosForm = $this->request->all();

		$validator = $this->validator->make($dadosForm, $this->model->rulesEditar($id) );

		if ($validator->fails()) {
			return redirect("panel/{$this->pastaView}/editar/{$dataEditar->id}")
			->withErrors($validator)->withInput();
		} else {

			$this->model->find($id)->update($dadosForm);

			$mensagem = "Edição de {$this->pastaView } realizado com sucesso";      
			return redirect("panel/{$this->pastaView}/editar/{$dataEditar->id}")
			->with('mensagem', $mensagem);;
		}
	}


	// METODO PARA DELETAR
	public function getDeletar($id)
	{
		$this->model->find($id)->delete();

		return redirect("panel/{$this->pastaView}");
	}



	// METODO PARA ENVIAR PARA LIXEIRA
	public function getLixeira($id)
	{
		$this->model->find($id)->delete();

		return redirect("panel/{$this->pastaView}");
	}


}
