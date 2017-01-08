@extends('painel.layout')
@section('content-panel')
<!-- Main content -->
<section class="content">
 <div class="row">
  <div class="col-md-12">

    <!-- general form elements -->
    <div class="box box-primary">
      <!-- form start -->
      <form action="/panel/usuarios/editar/{{$dataEditar->id}}" method="POST" enctype="multipart/form-data" role="form">
        {!! csrf_field() !!}
        <div class="box-header with-border">
          <h3 class="box-title">Editar Usuário</h3>
        </div><!-- /.box-header -->
        
        <div class="box-body">





          <div class="col-xs-8">
           <div class="col-md-12">
             <a href="/panel/usuarios"class="btn btn-default pull-left" >
              <i class="fa fa-list"></i> Ir para listagem de Usuários
            </a>

            <a href="/panel/usuarios/password/{{$dataEditar->id}}"class="btn btn-default pull-right" >
              <i class="fa  fa-lock"></i> Editar senha
            </a>
            <br><br>
          </div>
          <div class="col-md-12">
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
         </div>

         <div class="col-xs-12">
          <div class="form-group">
            <label for="exampleInputEmail1">Nome:</label>
            <input type="text" name="name" value="{{$dataEditar->name}}" placeholder="Nome" id="exampleInputNome" class="form-control">
          </div>
        </div>

        <div class="col-xs-12">
          <div class="form-group">
            <label for="exampleInputEmail1">Telefone:</label>
            <input type="text" name="telefone" value="{{$dataEditar->telefone}}" placeholder="Telefone" id="exampleInputTelefone" class="form-control">
          </div>
        </div>

        <div class="col-xs-12">
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" value="{{$dataEditar->email}}" placeholder="Insira o email" id="exampleInputEmail1" class="form-control">
          </div>
        </div>

        <div class="col-xs-6">
          <div class="form-group">
            <label for="exampleInputPassword1">Unidade Básica de Saúde (UBS)</label>
            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="id_ubs">

              @if(isset($list[0]['id']))
              <option value="{{ $list[0]['id'] }}" selected="selected"> {{ $list[0]['nome'] }} </option>
              @else
              <option value="">Selecione uma UBS</option>
              @endif

              @foreach($ubsLists as $ubs)
              <option value="{{$ubs->id}}">{{$ubs->nome}}</option>
              @endforeach

            </select>
          </div>
        </div>

        <div class="col-xs-6">
          <div class="form-group">
            <label for="exampleInputPassword1">Nível de Usuário</label>

            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="permissao">
            @if($dataEditar->permissao == '1') 
              <option value="1" selected="selected">Desenvolvedor</option>
              @elseif($dataEditar->permissao == '2') 
              <option value="2" selected="selected">Administrador(a)</option>
              @else
              <option value="3" selected="selected">Enfermeiro(a)</option>
              @endif
              <option value="3">Enfermeiro(a)</option>
              <option value="2">Administrador(a)</option>
              <option value="1">Desenvolvedor</option>
            </select>
          </div>
        </div>


      </div>
      <!-- ./col-xs-8 -->


      <div class="col-xs-4">
        <div class="form-group">   
          <label for="exampleInputFile">Foto</label> 
          @if($dataEditar->foto)          
          <img id="mini_foto_new" class="img" src="{{url($dataEditar->foto)}}" alt="" width="300">
          @else
          <img id="mini_foto_new" class="img" src="{{url('painel/dist/img/avatar.png')}}" alt="" width="300">
          @endif

          <br><br>
          <input type="file" id="image" name="foto" onchange="readURL(this,'mini_foto_new');" width="300" height="300">
          <!--  <input type="file" id="exampleInputFile"> -->
          <p class="help-block">Insira uma fotografia no perfil.</p>
        </div>
      </div> <!-- ./col-xs-4 -->
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