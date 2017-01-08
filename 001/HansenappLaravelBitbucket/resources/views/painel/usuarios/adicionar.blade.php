@extends('painel.layout')
@section('content-panel')
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <!-- form start -->
        <form action="/panel/usuarios/adicionar" method="POST" enctype="multipart/form-data" role="form">
          {!! csrf_field() !!}
          <div class="box-header with-border">
            <h3 class="box-title">ADICIONAR USUÁRIO</h3>
            <!--
            <a href="/panel/usuarios" class="btn btn-primary pull-right">Listar Usuários</a>  -->
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
            <h4><b>{{ $error }}</b></h4>
            @endforeach
          </div>
          @endif


          @if(session('mensagem'))
          <div class="alert alert-success-claro" role="alert">
            <h4><b>{{ session('mensagem')}}</b></h4>
          </div>
          @endif


          <div class="col-xs-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Nome:</label>
              <input type="text" name="name" value="{{old('name')}}" placeholder="Nome" id="exampleInputNome" class="form-control">
            </div>
          </div>

          <div class="col-xs-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" name="email" value="{{ old('email') }}" placeholder="Insira o email" id="exampleInputEmail1" class="form-control">
            </div>
          </div>

          <div class="col-xs-12">
            <div class="form-group">
              <label for="exampleInputPassword1">Password(Senha)</label>
              <input type="password" name="password"  placeholder="Digite um password" id="exampleInputPassword1" class="form-control">
            </div>
          </div>
        
          <div class="col-xs-12">
            <div class="form-group">
              <label for="exampleInputTelefone">Telefone:</label>
              <input type="text" name="telefone" value="{{old('telefone')}}"  placeholder="Telefone" id="exampleInputTelefone" class="form-control">
            </div>
          </div>

          <div class="col-xs-6">
            <div class="form-group">
              <label>Unidade Básica de Saúde (UBS)</label>
              <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" aria-hidden="true" name="id_ubs">

                <option selected="selected">Selecione uma UBS</option>

                @foreach($ubsList as $ubs)
                <option value="{{$ubs->id}}">{{$ubs->nome}}</option>
                @endforeach

              </select>
            </div>
          </div>

          <div class="col-xs-6">
            <div class="form-group">
              <label>Nível de Usuário</label>

              <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"  aria-hidden="true" name="permissao">
                <option value="3" >Enfermeiro(a)</option>
                <option value="2">Administrador</option>
                <option value="1">Desenvolvedor</option>
              </select>
            </div>
          </div>
          </div><!-- ./col-xs-8 -->

          <div class="col-xs-4">
            <div class="form-group">   
              <label for="exampleInputFile">Foto</label>           
              <img id="mini_foto_new" class="img" src="{{url('painel/dist/img/avatar.png')}}" alt="" width="300">
              <br><br>
              <input type="file" id="exampleInputFile" name="foto" onchange="readURL(this,'mini_foto_new');">
              <!--  <input type="file" id="exampleInputFile"> -->
              <p class="help-block">Insira uma fotografia no perfil.</p>
            </div>
          </div> <!-- ./col-xs-4 -->
  

          <div class="col-xs-12">
          <div class="box-footer">
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