<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\StandardController;

use Illuminate\Validation\Factory;
use App\User;
use App\Models\Painel\UBS;

use App\Classes\File;

use DB;
use App\Models\Painel\Paciente;


class PacienteController extends StandardController
{

    protected $request;
    protected $model;
    protected $validator;
    protected $pastaView = "pacientes";
    //protected $nomeView = "usuarios";
    // /protected $nomeView = "listagem";
    protected $titulo = "Pacientes";

    public function __construct(Request $request, Paciente $paciente, Factory $validator){

        $this->request = $request;
        $this->model = $paciente;
        $this->validator = $validator;

    }


    public function getIndex()
    {
        //$data = $this->model->paginate($this->totalItensPagina);
        $data = $this->model->all();
        //$dataCount = $this->model->umMuitos()->get();
        
        // $dataCount = $this->model
        // ->leftjoin('contatos','contatos.id_paciente', '=', 'pacientes.id')
        // ->join('u_b_s','u_b_s.id', '=', 'pacientes.id_ubs')
        // ->select('contatos.nome as nomeContato','contatos.id as idContato','contatos.id_paciente as idPacienteContato','pacientes.*','u_b_s.nome as ubsNome')->get();


        $countContatos = $this->model->numeroContatos();
        
        $titulo = "Listagem de {$this->titulo} | Painel Administrativo | Hansenapp Web";

        return view("painel.".$this->pastaView.".listagem", compact('titulo','data','dataCount','contatos','countContatos'));  
    }

    //metodo da listagem de apenas um dado
    public function getListar($id)
    {
        $dataCount = $this->model->find($id)->umMuitos()->get()->count();
        $dataUmMuitos = $this->model->find($id)->umMuitos()->get();

        //$dataListar = $this->model->find($id);
        $dataListar = $this->model
        ->leftjoin('u_b_s','u_b_s.id', '=', 'pacientes.id_ubs')
        ->select('u_b_s.nome as ubsNome','pacientes.*')->find($id);

        //dd($dataListar);
        $titulo = "Listagem de {$this->titulo} | Painel Administrativo | Hansenapp Web";
        return view("painel.".$this->pastaView.".listar", compact('titulo','dataListar','dataCount','dataUmMuitos'));
    }


    // METODOS PARA EDITAR
    public function getEditar($id)
    {

        //$getUBS = self::$hassmany;

        $list = $this->model->find($id)->umMuitosUBSPac()->get()->toArray();
        //dd($list);
        $ubsLists = UBS::all();

        $dataEditar = $this->model->find($id);
        $titulo = "Editar {$this->titulo} ! Painel Administrativo | Hansenapp Web";
        return view("painel.".$this->pastaView.".editar", compact('titulo','dataEditar','list','ubsLists'));

    }



    public function getDadosCount()
    {

        $dataCountPac = $this->model->where('id','1')->count();
        $dataCountCont = $this->model->where('id_ubs','2')->count();

        return [
        $dataCountPac,
        $dataCountCont,
        ];
    }

}
