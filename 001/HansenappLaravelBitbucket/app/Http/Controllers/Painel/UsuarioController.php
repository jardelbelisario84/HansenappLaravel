<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\StandardController;

use Illuminate\Validation\Factory;

use Hash;
use App\User;
use App\Models\Painel\UBS;

use App\Classes\File;

use DB;

class UsuarioController extends StandardController
{

    protected $request;
    protected $model;
    protected $validator;
    protected $pastaView = "usuarios";
    //protected $nomeView = "usuarios";
    // /protected $nomeView = "listagem";
    protected $titulo = "Usuários";

    

    public function __construct(Request $request, User $user, Factory $validator){

        $this->request = $request;
        $this->model = $user;
        $this->validator = $validator;

    }

    public function getIndex()
    {

        $data = $this->model
        ->leftjoin('u_b_s','u_b_s.id', '=', 'users.id_ubs')
        ->select('u_b_s.nome as ubsNome','users.*')->get();

        //$data = $this->model->orderBy('name','desc')->get();

        $titulo = "Listagem de {$this->titulo} | Painel Administrativo | Hansenapp Web";
        return view("painel.".$this->pastaView.".listagem", compact('titulo','data'));  
    }

     public function getDados()
    {

        $data = $this->model
        ->leftjoin('u_b_s','u_b_s.id', '=', 'users.id_ubs')
        ->select('u_b_s.nome as ubsNome','users.*')->get()->toJson();

        //$data = $this->model->orderBy('name','desc')->get();
        //dd($data);
        return $data;
        //$titulo = "Listagem de {$this->titulo} | Painel Administrativo | Hansenapp Web";
        //return view("painel.".$this->pastaView.".listagem", compact('titulo','data'));  
    }

    public function getDadosCount()
    {

        $dataCountDev = $this->model->where('permissao','1')->count();
        $dataCountAdmin = $this->model->where('permissao','2')->count();
        $dataCountEnf = $this->model->where('permissao','3')->count();

        return [
            $dataCountDev,
            $dataCountAdmin,
            $dataCountEnf
        ];
    }


    //metodo da listagem de apenas um dado
    public function getListar($id)
    {
        $dataListar = $this->model
        ->leftjoin('u_b_s','u_b_s.id', '=', 'users.id_ubs')
        ->select('u_b_s.nome as ubsNome','users.*')->find($id);

        $titulo = "Listagem de {$this->titulo} | Painel Administrativo | Hansenapp Web";
        return view("painel.".$this->pastaView.".listar", compact('titulo','dataListar','dataCount','dataUmMuitos'));
    }


    public function postAdicionar()
    {
        $rules = [
            "name" => "required|min:3|max:60",
            "email" => "required|min:3|max:60|unique:users",
            "password" => "required|min:3|max:60",
            "telefone" => "required|min:3|max:60",
            "permissao" => "required",
            "id_ubs" => "required",
        ];

        $dadosForm = $this->request->all();



        $validator = $this->validator->make($dadosForm,$rules);

        if ($validator->fails()) {
            return redirect("panel/{$this->pastaView}/adicionar")->withErrors($validator)->withInput();
        }else{

        $retornoImg =  File::salvarImagem( $this->request,"foto","painel/uploads/{$this->pastaView}/",null);


            if($retornoImg[1] == null){
                $dadosForm['foto'] = '';
            }else{
                $dadosForm['foto'] = $retornoImg[0];
            }    

        $dadosForm['password'] = Hash::make($this->request->input('password'));
        $this->model->create($dadosForm);

        dd($dadosForm);

        $mensagem = "Cadastro realizado com sucesso!";
        // return view("painel/{$this->pastaView}/adicionar",compact('mensagem'));

        return redirect("panel/{$this->pastaView}/adicionar")->with('mensagem',$mensagem);
        }
    }


    // METODOS PARA EDITAR
    public function getEditar($id)
    {

        //$getUBS = self::$hassmany;

        $list = $this->model->find($id)->umMuitos()->get()->toArray();
        //dd($list);
        $ubsLists = UBS::all();

        $dataEditar = $this->model->find($id);
        $titulo = "Editar {$this->titulo} ! Painel Administrativo | Hansenapp Web";
        return view("painel.".$this->pastaView.".editar", compact('titulo','dataEditar','list','ubsLists'));

    }


    public function postEditar($id)
    {
        $dataEditar = $this->model->find($id);

        $rules = [
            "name"      => "required|min:3|max:60",
            "email"     => "required|min:3|max:60|unique:users,email,{$id}",
            "telefone"  => "required|min:14|max:15",
            "password"  => "users,password,{$id}",
            "foto"      => "unique:users,foto,{$id}"
        ];

            //$dadosForm = $this->request->except('image');
        $dadosForm = $this->request->all();

        $validator = $this->validator->make($dadosForm,$rules);

        if ($validator->fails()) {
            return redirect("panel/{$this->pastaView}/editar/{$dataEditar->id}")
            ->withErrors($validator)->withInput();
        } else {
             
           $retornoImg = File::salvarImagem($this->request,"foto","painel/uploads/{$this->pastaView}/",$dataEditar);


            //$dadosForm['password'] = Hash::make($this->request->input('password'));
            
            // if($retornoImg[1] == null){
            //     $dadosForm['foto'] = '';
            // }else{
            //     $dadosForm['foto'] = $retornoImg[0];
            // }    

            if($retornoImg[1] != null){
                 $dadosForm['foto'] = $retornoImg[0];
            }

            $this->model->find($id)->update($dadosForm);

            $mensagem = "Editado com sucesso!";

            return redirect("panel/{$this->pastaView}/editar/{$dataEditar->id}")
            ->with('mensagem',$mensagem);
        }
    }


     // METODOS PARA EDITAR
    //public function gtpassword($id)
    public function getPassword($id)
    {

        $list = User::find($id)->get()->toArray();

        $ubsLists = \App\Models\Painel\UBS::all();
        $pacienteList = \App\Models\Painel\Paciente::find($id);

        $dataEditar = $this->model->find($id);
        $titulo = "Editar  Senha";
        return view("painel.".$this->pastaView.".password", compact('titulo','dataEditar','list','ubsLists'));

    }


     //public function ptpassword($id)
     public function postPassword($id)
    {
        $dataEditar = $this->model->find($id);

        $rules = [
        "password"      => "required|min:3|max:60|confirmed",
        "password_confirmation"      => "required|min:3|max:60",
        ];

            //$dadosForm = $this->request->except('image');
        $dadosForm = $this->request->all();

        $validator = $this->validator->make($dadosForm,$rules);

        if ($validator->fails()) {
            return redirect("panel/{$this->pastaView}/password/{$dataEditar->id}")
            ->withErrors($validator)->withInput();
        } else {
            
           $retornoImg = File::salvarImagem($this->request,"foto","painel/uploads/{$this->pastaView}/",$dataEditar);


            $dadosForm['password'] = Hash::make($this->request->input('password'));
            
            if($retornoImg[1] == null){
                $dadosForm['foto'] = '';
            }else{
                $dadosForm['foto'] = $retornoImg[0];
            }    


            $this->model->find($id)->update($dadosForm);

            $mensagem = "Editado com sucesso!";

           return redirect("panel/{$this->pastaView}/password/{$dataEditar->id}")
            ->with('mensagem',$mensagem);
        }
    }


}//fecha a classe Usuario
