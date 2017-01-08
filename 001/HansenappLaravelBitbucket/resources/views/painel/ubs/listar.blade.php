@extends('painel.layout')
@section('content-panel')
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          
          <div class="col-md-12">
            <h3 class="box-title"><b>LISTAGEM DE UBS</b> (view Listar)</h3>
          </div>
        </div><!-- /.box-header -->
        <hr>
        <div class="box-body">

          <div class="col-md-12">
           <a href="/panel/contatos"class="btn btn-default pull-left" >
            <i class="fa fa-list"></i> Ir para listagem de UBS
          </a>
          <a href="/panel/ubs/editar/{{$dataListar->id}}" class="btn btn-success pull-right"> Editar UBS</a>
        </div>
        <br><br><br>

        <div class="row">
          <div class="col-md-12">
            <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>INFORMAÇÕES SOBRE <b>{{$dataListar->nome}}</b></tr>
            </thead>
            <tbody>
              <tr>
                <td style="width: 150px"><b>Nome</b></td>
                <td>{{$dataListar->nome}}</td>
              </tr>
              <tr>
                <td style="width: 150px"><b>Bairro</b></td>
                <td>{{$dataListar->bairro}}</td>
              </tr>
              <tr>
                <td style="width: 150px"><b>Rua</b></td>
                <td>{{$dataListar->rua}}</td>
              </tr>
                <tr>
                <td style="width: 150px"><b>Telefone</b></td>
                <td>{{$dataListar->numero}}</td>
              </tr>
            </tbody>
          </table>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->





      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- /.col -->
</div><!-- /.row -->
</section><!-- /.content -->
@endsection