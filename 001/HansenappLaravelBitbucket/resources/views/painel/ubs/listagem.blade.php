@extends('painel.layout')
@section('content-panel')
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">

      <div class="box">
        <div class="box-header">
          <div class="col-md-12">
            <h3 class="box-title"><b>LISTAGEM DE UBS (view Listagem)</b></h3>
            <a href="/panel/ubs/adicionar" class="btn btn-primary pull-right"> Adicionar nova UBS</a>
          </div>
        </div><!-- /.box-header -->
        <hr>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Nome</th>
                <th>Bairro</th>
                <th>Rua</th>
                <th>Número</th>
                <th style="width: 100px;">Ações</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $ubs)
              <tr>
                <td>{{$ubs->nome}}</td>
                <td>{{$ubs->bairro}}</td>
                <td>{{$ubs->rua}}</td>
                <td>{{$ubs->numero}}</td>
                <td>
                  <div class="btn-group">
                    <a href="/panel/ubs/listar/{{$ubs->id}}" type="button" class="btn btn-primary" title="Visualizar Perfil"> <i class="fa  fa-eye"></i></a>
                    <a href="/panel/ubs/editar/{{$ubs->id}}" type="button" class="btn btn-success" title="Editar Perfil"> <i class="fa  fa-edit"></i></a>
                    <a href="/panel/ubs/deletar/{{$ubs->id}}" type="button" class="btn btn-danger" title="Deletar Perfil"> <i class="fa   fa-close"></i></a>
                  </div>
                </td>
              </tr>
              @endforeach

            </tbody>
            <tfoot>
              <tr>
                <th>Nome</th>
                <th>Bairro</th>
                <th>Rua</th>
                <th>Número</th>
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