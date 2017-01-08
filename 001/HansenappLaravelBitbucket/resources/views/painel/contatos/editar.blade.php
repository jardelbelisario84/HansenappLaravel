@extends('painel.layout')
@section('content-panel')
<!-- Main content -->
<section class="content">
 <div class="row">
  <div class="col-md-12">

    <!-- general form elements -->
    <div class="box box-primary">
      <!-- form start -->
      <form action="/panel/contatos/editar/{{$dataEditar->id}}" method="POST" enctype="multipart/form-data" role="form">
        {!! csrf_field() !!}
        <div class="box-header with-border">
          <h3 class="box-title">EDITAR CONTATO</h3>
          <!-- <a href="/panel/usuarios" class="btn btn-primary pull-right">Listar Usuários</a> -->
        </div><!-- /.box-header -->
        
        <div class="box-body">
          <div class="col-md-12">
           <a href="/panel/contatos"class="btn btn-default pull-left" >
            <i class="fa fa-list"></i> Ir para listagem de Contato
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
          <label for="exampleInputEmail1">Nome</label>
          <input type="text" name="nome" value="{{$dataEditar->nome}}" placeholder="Nome" id="exampleInputNome" class="form-control">
        </div>
      </div>

      <div class="col-xs-6">
        <div class="form-group">
          <label for="exampleInputEmail1">Grau de Parentesco:</label>
          <input type="text" name="parentesco" value="{{$dataEditar->parentesco}}"  placeholder="Grau de Parentesco" id="exampleInputBairro" class="form-control">
        </div>
      </div>



      <div class="col-xs-6">
        <div class="form-group">
          <label for="exampleInputPassword1">Telefone</label>
          <input type="text" name="telefone" value="{{$dataEditar->telefone}}"  placeholder="Insira o numero de telefone" id="exampleInputNummero" class="form-control">
        </div>
      </div>

      <div class="col-xs-6">
        <div class="form-group">
          <label for="exampleInputPassword1">Selecione a qual Paciente esse contato percente.</label>
          <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="id_paciente">
            <@if(isset($list[0]['id']))
            <option value="{{ $list[0]['id'] }}" selected="selected">
              {{ $list[0]['nome'] }}
            </option>
            @else
            <option value="">Selecione uma UBS</option>
            @endif

            @foreach($pacienteList as $paciente)
            <option value="{{$paciente->id}}">{{$paciente->nome}}</option>
            @endforeach

          </select>
        </div>
      </div>

      <div class="col-xs-6">
        <div class="form-group">
          <label for="exampleInputEmail1">Status</label>
          <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="status">
            <@if(isset($dataEditar->status))
            <option value="{{ $dataEditar->status }}" selected="selected">
              @if($dataEditar->status == 'true')
              Verificado / Avaliado
              @else
              Não Verificado / Não Avalido
              @endif
            </option>
            @else
            <option value="">Selecione o Status/Avaliação</option>
            @endif
            <option value="true">Verificado / Avaliado</option>
            <option value="false">Não Verificado / Não Avalido</option>
          </select>
        </div>
      </div>


    </div>
    <!-- ./col-xs-8 -->


  </div><!-- /.box-body -->

  <div class="box-footer">
    <div class="col-xs-12">
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