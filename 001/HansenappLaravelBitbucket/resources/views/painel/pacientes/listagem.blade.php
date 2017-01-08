@extends('painel.layout')
@section('content-panel')
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">

      <div class="box">
        <div class="box-header">
         <div class="col-md-12">
          <h3 class="box-title"><b>LISTAGEM DE PACIENTES (view Listagem)</b></h3>
          <a href="/panel/pacientes/adicionar" class="btn btn-primary pull-right"> Adicionar novo Paciente</a>
        </div>
        <br> <br>
      </div><!-- /.box-header -->
      <hr>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Nome</th>
              <th style="width: 100px;">Número SINAN</th>
              <th style="width: 100px;">Telefone</th>
              <th style="width: 70px;">Qtd de Contatos</th>
              <th style="width: 100px;">UBS</th>
              <th style="width: 100px;">Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach($countContatos as $paciente)
            <tr>
              <td>{{$paciente->nome}}</td>
              <td>{{$paciente->numero_sinan}}</td>
              <td>{{$paciente->telefone}}</td>
              <td class="pull-center">
                <!-- <span class="label label-default">{{ $paciente->numeroContatos }}</span> -->
                <span class="label bg-black">{{ $paciente->numeroContatos }}</span>
              </td>
              <td>
                  @if($paciente->ubsNome != 'null')
                    {{ $paciente->ubsNome }}
                  @else
                    Falta Cadastrar
                  @endif</td>
              <td>
                <div class="btn-group">
                 <a href="/panel/pacientes/listar/{{$paciente->id}}" type="button" class="btn btn-primary" title="Visualizar Perfil"> <i class="fa  fa-eye"></i></a>
                 <a href="/panel/pacientes/editar/{{$paciente->id}}" type="button" class="btn btn-success" title="Editar Perfil"> <i class="fa  fa-edit"></i></a>
                 <a href="/panel/pacientes/deletar/{{$paciente->id}}" type="button" class="btn btn-danger" title="Deletar Perfil"> <i class="fa   fa-close"></i></a>
               </div>
             </td>
           </tr>
           @endforeach

         </tbody>
         <tfoot>
          <tr>
            <th>Nome</th>
            <th>Número Sinan</th>
            <th>Telefone</th>
            <th>Qtd de Contatos</th>
            <th>UBS</th>
            <th>Ações</th>
          </tr>
        </tfoot>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div><!-- /.col -->
</div><!-- /.row -->
</section><!-- /.content -->

@endsection