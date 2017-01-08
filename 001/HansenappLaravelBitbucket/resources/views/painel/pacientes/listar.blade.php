@extends('painel.layout')
@section('content-panel')
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <div class="col-md-12">
            <h3 class="box-title"><b>LISTAGEM DE PACIENTE</b> (view Listar)</h3>
          </div>
        </div><!-- /.box-header -->
        <hr>
        <div class="box-body">

          <div class="col-md-9">
           <a href="/panel/pacientes"class="btn btn-default pull-left" >
            <i class="fa fa-list"></i> Ir para listagem de Pacientes
          </a>
          </div>
          <div class="col-md-3">
          <a href="/panel/pacientes/editar/{{$dataListar->id}}" class="btn btn-success pull-right"> Editar perfil</a>
          <a href="/panel/pacientes/adicionar" class="btn btn-primary pull-left"> Adicionar novo</a>
        </div>
        <br><br>

          <div class="row">
            <div class="col-md-12">
              <!-- Widget: user widget style 1 -->
              <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <!-- <div class="widget-user-header bg-blue bg-black bg-yellow bg-aqua-active"> -->
                <div class="widget-user-header bg-blue">
                  <div class="widget-user-image">
                   @if($dataListar->foto)
                   <img class="img-circle" src="{{url($dataListar->foto)}}" alt="User Avatar">
                   @else
                   <img class="img-circle" src="{{url('painel/dist/img/avatar.png')}}" alt="User Avatar">
                   @endif  
                 </div>
                 <!-- /.widget-user-image -->
                 <!-- <h3 class="widget-user-username">{{$dataListar->nome}}</h3> -->
                 <h3 class="widget-user-username">
                    <!-- <b>INFORMAÇÕES GERAIS SOBRE O PACIENTE</b> -->
                    <b>{{$dataListar->nome}}</b>
                 </h3>
                 <h5 class="widget-user-desc">Paciente |  SINAN: {{$dataListar->numero_sinan}}</h5>
                 <h5 class="widget-user-desc">Paciente |  TELEFONE: {{$dataListar->telefone}}</h5>
                 <h5 class="widget-user-desc">Paciente |  {{$dataListar->ubsNome}}</h5>
               </div>
               <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                 <li class="alert-amarelo-claro">
                  <h4>
                     Quantidade de <b>Contato(s) / Familiar(es)</b> referente(s) ao paciente: 
                    <span class="badge bg-red pull-right">{{$dataCount}}</span>
                  </h4>
                </li>
              </ul>
          </div>
        </div>
        <!-- /.widget-user -->
      </div>
      <!-- /.col -->
      <div class="col-md-12">
       
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>NOME DO CONTATO/FAMILIAR</th>
                    <th>Status</th>
                    <th>Grau de Parentesco</th>
                    <th style="width: 100px;">Ações</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($dataUmMuitos as $data[$i=0]['nome'])
                  <tr>
                    <td>{{$data[$i]['nome']->nome}}</td>
                    <td>
                        @if($data[$i]['nome']->status == 'true')
                          Verificado / Avaliado
                        @else
                          Não Verificado / Não Avalido
                        @endif
                    </td>
                    <td>{{$data[$i]['nome']->parentesco}}</td>
                    <td>
                      <div class="btn-group">
                       <a href="/panel/contatos/listar/{{$data[$i]['nome']->id}}" type="button" class="btn btn-primary" title="Visualizar Perfil"> <i class="fa  fa-eye"></i></a>
                       <a href="/panel/contatos/editar/{{$data[$i]['nome']->id}}" type="button" class="btn btn-success" title="Editar Perfil"> <i class="fa  fa-edit"></i></a>
                       <a href="/panel/contatos/deletar/{{$data[$i]['nome']->id}}" type="button" class="btn btn-danger" title="Deletar Perfil"> <i class="fa   fa-close"></i></a>
                     </div>
                   </td>
                 </tr>
                 @endforeach

               </tbody>
            </table>
      </div>
    </div>
    <!-- /.row -->





  </div><!-- /.box-body -->
</div><!-- /.box -->
</div><!-- /.col -->
</div><!-- /.row -->
</section><!-- /.content -->
@endsection