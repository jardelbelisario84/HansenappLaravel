<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\StandardController;

use Illuminate\Validation\Factory;
use App\User;

class PasswordController extends StandardController
{
   	
   	protected $request;
    protected $model;
    protected $validator;
    protected $pastaView = "passwords";
    //protected $nomeView = "usuarios";
    // /protected $nomeView = "listagem";
    protected $titulo = "Password";

    public function __construct(Request $request, User $user, Factory $validator){

        $this->request = $request;
        $this->model = $user;
        $this->validator = $validator;

    }

    // METODOS PARA EDITAR
    public function getEditar($id)
    {

        $list = \App\Models\Painel\UBS::leftjoin('users','users.id_ubs', '=', 'u_b_s.id')
        ->select('users.*','u_b_s.id as ubsId','u_b_s.nome as ubsNome')
        ->where('users.id','=', $id)->get();

        $list = User::find($id)->getUBS()->get();

        dd($list);

        $ubsLists = \App\Models\Painel\UBS::all();
       // $pacienteList = \App\Models\Painel\Paciente::find($id);
        $dataEditar = $this->model->find($id);
        $titulo = "Editar {$this->titulo}! Painel Administrativo | Hansenapp Web";
        return view("painel.".$this->pastaView.".editar", compact('titulo','dataEditar','list','ubsLists','pacienteList'));


    }

    // METODOS PARA EDITAR
    public function getEditar($id)
    {

        //$getUBS = self::$hassmany;

        $list = $this->model->find($id)->get()->toArray();
        //dd($list);
        $ubsLists = UBS::all();

        $dataEditar = $this->model->find($id);
        $titulo = "Editar {$this->titulo} ! Painel Administrativo | Hansenapp Web";
        return view("painel.".$this->pastaView.".editar", compact('titulo','dataEditar','list','ubsLists'));

    }

}
