@extends('painel.layout')
@section('content-panel')
<!-- Main content -->
<section class="content">
 <div class="row">
  <div class="col-md-12">

    <!-- general form elements -->
    <div class="box box-primary">
      <!-- form start -->
      <form action="/panel/usuarios/password/{{$dataEditar->id}}" method="POST" enctype="multipart/form-data" role="form">
        {!! csrf_field() !!}
        <div class="box-header with-border">
          <h3 class="box-title">Editar Senha de : <b>{{$dataEditar->name}}</b></h3>
        </div><!-- /.box-header -->
        
        <div class="box-body">

         <div class="col-md-12">
           <a href="/panel/usuarios"class="btn btn-default pull-left" >
            <i class="fa fa-list"></i> Ir para listagem de Usuários
          </a>
        </div>
        <br><br>


        <div class="col-xs-8">


          @if( count( $errors) > 0)
          <div class="alert alert-danger-claro" role="alert">
            @foreach( $errors->all()  as $error)
            <b>{{ $error }}</b><br>
            @endforeach
          </div>
          @endif

          @if(session('mensagem'))
          <div class="alert alert-success-claro" role="alert">
           <h4><b>{{ session('mensagem')}}</b></h4>
         </div>
         @endif

         <div class="col-xs-12">
          <div class="form-group has-feedback">
            <label for="exampleInputEmail1">Nova senha:</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Insira nova senha"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
        </div>

        <div class="col-xs-12">
          <div class="form-group has-feedback">
            <label for="exampleInputEmail1">Confirme a senha:</label>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirme a senha">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
        </div>

      </div>
      <!-- ./col-xs-8 -->

    </div><!-- /.box-body -->

    <div class="box-footer">
      <div class="col-xs-8">
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