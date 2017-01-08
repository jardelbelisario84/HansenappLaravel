<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\StandardController;

use Illuminate\Validation\Factory;
use App\User;
use App\Models\Painel\UBS;


class UBSController extends StandardController
{
   	
   	protected $request;
    protected $model;
    protected $validator;
    protected $pastaView = "ubs";
    //protected $nomeView = "usuarios";
    // /protected $nomeView = "listagem";
    protected $titulo = "UBS";

    public function __construct(Request $request, UBS $ubs, Factory $validator){

        $this->request = $request;
        $this->model = $ubs;
        $this->validator = $validator;

    }


    //metodo da listagem de apenas um dado
    public function getListar($id)
    {

        $dataListar = $this->model->find($id);
        $titulo = "Listagem de {$this->titulo} | Painel Administrativo | Hansenapp Web";
        return view("painel.".$this->pastaView.".listar", compact('titulo','dataListar'));
    }

    // METODOS PARA EDITAR
    public function getEditar($id)
    {   
        $ubsLists = \App\Models\Painel\UBS::all();
        $pacienteList = \App\Models\Painel\Paciente::all();

        $dataEditar = $this->model->find($id);
        $titulo = "Editar {$this->titulo}! Painel Administrativo | Hansenapp Web";
        return view("painel.".$this->pastaView.".editar", compact('titulo','dataEditar','ubsLists','pacienteList','list'));

    }


    public function getDadosCount()
    {

        $dataCountUBS = $this->model->count();
        $dataCountUBSTotal = 50;

        return [
            $dataCountUBS,
            $dataCountUBSTotal,
        ];
    }

}
