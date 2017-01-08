<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\StandardController;

use Illuminate\Validation\Factory;
use App\User;
use App\Models\Painel\Contato;


class ContatoController extends StandardController
{
   	
   	protected $request;
    protected $model;
    protected $validator;
    protected $pastaView = "contatos";
    //protected $nomeView = "usuarios";
    // /protected $nomeView = "listagem";
    protected $titulo = "Contatos";

    public function __construct(Request $request, Contato $contato, Factory $validator){

        $this->request = $request;
        $this->model = $contato;
        $this->validator = $validator;

    }

    public function getDadosCount()
    {

        $dataCountContNV = $this->model->where('status','0')->count();
        $dataCountContV = $this->model->where('status','1')->count();

        return [
            $dataCountContNV,
            $dataCountContV,
        ];
    }

}
