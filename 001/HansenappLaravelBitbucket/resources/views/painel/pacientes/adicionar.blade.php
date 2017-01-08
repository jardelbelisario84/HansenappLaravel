@extends('painel.layout')
@section('content-panel')
<!-- Main content -->
<section class="content">
  <div class="row">


    <div class="col-md-12">

      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Cadastro de Pacientes</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form action="/panel/pacientes/adicionar" method="POST" role="form">
         {!! csrf_field() !!}
         <div class="box-body">
           <div class="col-md-12">
             <a href="/panel/pacientes"class="btn btn-default pull-left" >
              <i class="fa fa-list"></i> Ir para listagem de Pacientes
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
             <h4><b>{{ session('mensagem')}}</b></h4>
           </div>
           @endif
           <div class="col-xs-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Nome:</label>
              <input type="text" name="nome" placeholder="Nome" id="exampleInputNome" class="form-control" value="{{old('nome')}}">
            </div>
          </div>

          <div class="col-xs-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Número Sinan:</label>
              <input type="text" name="numero_sinan" placeholder="Número Sinan" id="exampleInputNumeroSinan" name="numero_sinan" class="form-control" value="{{old('numero_sinan')}}">
            </div>
          </div>

          <div class="col-xs-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Telefone:</label>
              <input type="text" name="telefone"  placeholder="Telefone" id="exampleInputTelefone" class="form-control" value="{{old('telefone')}}"> 
            </div>
          </div>

          <div class="col-xs-6">
            <div class="form-group">
             <label for="exampleInputPassword1">Unidade Básica de Saúde (UBS)</label>
             <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="id_ubs">

              <option selected="selected">Selecione uma UBS</option>

              @foreach($ubsList as $ubs)
              <option value="{{$ubs->id}}">{{$ubs->nome}}</option>
              @endforeach

            </select>
          </div>
        </div>

        <div class="col-xs-6">
          <div class="form-group">
            <label for="exampleInputPassword1">Tipo de Hanseníase</label>
            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" aria-hidden="true" name="tipo_hanseniase">


              <option value="">Selecione o tipo de hanseníase</option>
              <option value="">Paucibalicilar</option>
              <option value="">Multipaucibacilar</option>

            </select>
          </div>
        </div>

      </div><!-- /.col-8 -->

    </div><!-- /.box-body -->

    <div class="box-footer">
    <button type="submit" class="btn btn-success btn-block" type="submit">Enviar Dados</button>
    </div>
  </form>

</div><!-- /.box -->
</div><!-- /.box primary-->
</div><!-- /.row -->
</section><!-- /.content -->
@endsection