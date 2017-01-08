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
        $dataCount = $this->model
        ->leftjoin('contatos','contatos.id_paciente', '=', 'pacientes.id')
        ->select('contatos.nome as nomeContato','contatos.id as idContato','contatos.id_paciente as idContatoPaciente','pacientes.*')->get();
        // if($dataCount[]->idContatoPaciente == 120){
        //     $data2 = $dataCount[]->nomeContato;
        // }


        /////////////////////////////////////////////////
          // $texto = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

            // $texto = $dataCoun[];
            // //$palavras = explode(' ', $texto);
            // $palavras = ($texto);
            // echo count($palavras); // 91
            // $ocorrencias = array();

            // for($i = 0; $i<count($palavras); $i++){
            //     $palavra = $palavras[$i];
            //     $ocorrencias[$palavra] = $palavra + 1; //$numero[$dataContato->nome] = $dataContato->nome +1;
            // }

            // //arsort($ocorrencias).'<br>';
            // dump($ocorrencias).'<br>';

            foreach ($dataCount as $dataContato) {

            $texto[] = $dataContato->nome;
            //$palavras = explode(' ', $texto);
            $palavras = $texto;
            echo count($palavras); // 91
            $ocorrencias = array();

            for($i = 0; $i<count($palavras); $i++){
                $palavra = $palavras[$i];
                $ocorrencias[$palavra] = $palavra + 1; //$numero[$dataContato->nome] = $dataContato->nome +1;
            }

            arsort($ocorrencias).'<br>';
            dump($ocorrencias).'<br>';



          $numero[$dataContato->nome] = $dataContato->nome +1;
            }


        /////////////////////////////////////////////////

        foreach ($dataCount as $dataContato) {
           // echo $dataContato->nome.' - '.'<b>'.$dataContato->nomeContato.'</b><br>';        
           // dd($numero[$dataContato->nome]);
            $numero[$dataContato->nome] = $dataContato->nome +1;
        }

        foreach ($numero as $dataContato->nome => $aparicoes) 
        { 
            echo "A palavra $dataContato->nome apareceu $aparicoes vez(es)<br>".PHP_EOL; 
        } 

        echo '<hr>';

         $i = 0;
        foreach ($dataCount as $dataContato) {
            $i++;
            //$dataContato[$i]->nome;// if there are 15 $item[number] in this foreach, I want get the value : 15
            if($dataContato->nomeContato){
                print_r( $dataContato->nome);
                $numero[$dataContato->nome];
            }

            $array[] = print_r( $dataContato->nome.'<br>');
            
        }   


        
        echo '<hr>';

        print_r( array_count_values($array));

        echo '<hr>';
        print_r($numero);
        echo '<hr>';

        foreach ($numero as $dataContato->nome => $aparicoes) 
        {  
            echo "A palavra $dataContato->nome apareceu $aparicoes vez(es)<br>".PHP_EOL; 
        } 

        echo '<hr>';
        // foreach ($palavras as $palavra) 
        // { 
        //     $numero[$palavra]++; 
        // } 

        // foreach ($numero as $palavra => $aparicoes) 
        // { 
        //     echo "A palavra $palavra apareceu $aparicoes vez(es)".PHP_EOL; 
        // } 




        for ($i=0; $i < count($dataCount); $i++) { 

            //$resultado[$i] = $dataCount[$i]->nomeContato;

            foreach ($dataCount as $dataContato) {
                if($dataCount[$i]->id == $dataCount[$i]->idContatoPaciente ) {
                //$conta[$i] = substr_count($dataCount[$i]->nome, "Abgail");
                //$conta[$i] = $dataCount[$i]->nomeContato.' - '.$dataCount[$i]->nome;
                   $resul = $dataContato->nomeContato;

               } 
           }




            //////////////////////////////////////////////////
           if($dataCount[$i]->nome == "Neo Pinel" ){

            $conta[$i] = $dataCount[$i]->nome;

        }
            //////////////////////////////////////////////////

            //$conta[$i] = substr_count($dataCount[$i]->nome, $data[$i]->nome);

            //dump($resultado[$i].' -'.$resultado2[$i] );    
             //dump($resultado2[$i] = $dataCount[$i]->nomeContato);
             //dump($dataCount[$i]->nome);
             //dump($data[$i]->nome);
    }
          //dump($dataCount[4]->nome);
          //print_r($conta);
          //print_r($conta);
          //dump(count($conta));
    dd($dataCount);




          //dump(count($resultado2[2]+$resultado2[2]) );

    // @forelse($dataCount as $dataContato)
    //   @if($paciente->id == $dataContato->idContatoPaciente)            
    //        {{$dataContato->nomeContato}},  
    //   @endif
    //   @empty
    //    Campo vazio
    //   @endforelse
    //   {{ count($dataContato->nomeContato) }}

    //dd($resultado);
    $dataCount2 = $this->model->umMuitos($dataCount[0]->idContatoPaciente)->get();

    $dataCountContatos = $this->model
    ->leftjoin('contatos','contatos.id_paciente', '=', 'pacientes.id')
    ->select('contatos.*')->where('contatos.id_paciente','pacientes.ide')->get()->count();

        //dd($dataCountContatos);
        //dd($dataCount);
        //dd($data2);
        //dd($dataCount2);

    $titulo = "Listagem de {$this->titulo} | Painel Administrativo | Hansenapp Web";

    return view("painel.".$this->pastaView.".listagem", compact('titulo','data','dataCount','dataCount2'));  
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
