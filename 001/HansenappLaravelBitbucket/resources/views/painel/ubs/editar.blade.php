@extends('painel.layout')
@section('content-panel')
<!-- Main content -->
<section class="content">
 <div class="row">
  <div class="col-md-12">

    <!-- general form elements -->
    <div class="box box-primary">
      <!-- form start -->
      <form action="/panel/ubs/editar/{{$dataEditar->id}}" method="POST" enctype="multipart/form-data" role="form">
        {!! csrf_field() !!}
        <div class="box-header with-border">
          <h3 class="box-title">EDITAR UBS</h3>
          <!-- <a href="/panel/usuarios" class="btn btn-primary pull-right">Listar Usuários</a> -->
        </div><!-- /.box-header -->
        
        <div class="box-body">
          <div class="col-md-12">
           <a href="/panel/ubs"class="btn btn-default pull-left" >
            <i class="fa fa-list"></i> Ir para listagem de UBS
          </a>
        </div>
        <br><br>


        <div class="col-xs-12">

         @if( count( $errors) > 0)
         <div class="alert alert-danger-claro" role="alert">
          @foreach( $errors->all()  as $error)
          <h4><b>{{ $error }}</b></h4>
          @endforeach
        </div>
        @endif

        @if(session('mensagem'))
        <div class="alert alert-success-claro" role="alert">
         <h4><b>{{ session('mensagem') }}</b></h4>
       </div>
       @endif

       <div class="col-xs-6">
        <div class="form-group">
          <label for="exampleInputEmail1">Nome da UBS:</label>
          <input type="text" name="nome" value="{{$dataEditar->nome}}" placeholder="Ex: UBS Vila Lobão" id="exampleInputNome" class="form-control">
        </div>
      </div>

      <div class="col-xs-6">
        <div class="form-group">
          <label for="exampleInputEmail1">Bairro:</label>
          <input type="text" name="bairro" value="{{$dataEditar->bairro}}"  placeholder="Insira o bairro correspondente à UBS" id="exampleInputBairro" class="form-control">
        </div>
      </div>

      <div class="col-xs-6">
        <div class="form-group">
          <label for="exampleInputEmail1">Rua</label>
          <input type="text" name="rua" value="{{$dataEditar->rua}}" placeholder="Insira o nome da rua correspondente à UBS" id="exampleInputUBS" class="form-control">
        </div>
      </div>

      <div class="col-xs-6">
        <div class="form-group">
          <label for="exampleInputPassword1">Número</label>
          <input type="text" name="numero" value="{{$dataEditar->numero}}"  placeholder="Insira o Ńúmero correspondente à UBS" id="exampleInputNummero" class="form-control">
        </div>
      </div>

    </div>
    <!-- ./col-xs-8 -->


  </div><!-- /.box-body -->

  <div class="box-footer">
    <div class="col-xs-4">
      <div class="form-group">
        <button type="submit" class="btn btn-success btn-block" type="submit">Enviar Dados</button>

      </div>
    </div>
  </div>
</form>



</div><!-- /.box primary-->
</div><!-- /.col-md-12 --> 
</div><!-- /.row -->

</section><!-- /.content -->
@endsection