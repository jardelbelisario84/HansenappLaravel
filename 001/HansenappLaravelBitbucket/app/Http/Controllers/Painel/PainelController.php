<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Painel\Paciente;
use App\Models\Painel\Contato;
use App\Models\Painel\UBS;

class PainelController extends Controller
{



    private $usuarios;
	private $pacientes;
	private $contatos;
	private $ubs;

	public function __construct(User $usuarios, Paciente $pacientes, Contato $contatos, UBS $ubs){

		$this->usuarios = $usuarios;
		$this->pacientes = $pacientes;
		$this->contatos = $contatos;
		$this->ubs = $ubs;

	}

    public function getIndex()
    {
    	$usuarios = $this->usuarios->all()->count();
    	$pacientes = $this->pacientes->all()->count();
    	$contatos = $this->contatos->all()->count();
    	$ubs = $this->ubs->all()->count();

    	$titulo = "Bem vindo(a)! Painel Administrativo | Hansenapp Web";
    	return view('painel.home.home', compact('titulo','usuarios','pacientes','contatos','ubs'));
    }

    
    public function missingMethod($parameters =  array())
    {
    	return view('painel.errors.404');
    }
}
