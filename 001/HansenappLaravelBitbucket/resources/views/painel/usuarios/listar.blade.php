@extends('painel.layout')
@section('content-panel')
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">

          <div class="col-md-12">
            <h3 class="box-title"><b>LISTAGEM DE USUÁRIO</b> (view Listar)</h3>
          </div>
        </div><!-- /.box-header -->
        <hr>
        <div class="box-body">

          <div class="col-md-9">
           <a href="/panel/usuarios"class="btn btn-default pull-left" >
            <i class="fa fa-list"></i> Ir para listagem de Usuários
          </a>
        </div>
        <div class="col-md-3">
          <a href="/panel/usuarios/editar/{{$dataListar->id}}" class="btn btn-success pull-right"> Editar perfil</a>
          <a href="/panel/usuarios/adicionar" class="btn btn-primary pull-left"> Adicionar novo</a>
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
               <b>INFORMAÇÕES GERAIS SOBRE O USUÁRIO</b>
              </h3>
              <h3 class="widget-user-desc">{{ $dataListar->name}}</h3>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
               <li class="alert-verde-claro">
                <h4>
                 Nível de acesso: 
                  @if($dataListar->permissao == '1')
                    <span class="label label-black pull-right">
                      Desenvolvedor
                    </span>
                   @elseif($dataListar->permissao == '2')
                    <span class="label label-info pull-right">
                      Administrador
                    </span>
                   @else
                    <span class="label label-success pull-right">
                      Enfermeiro(a)
                    </span>
                   @endif
               </h4>
             </li>
              <li>
                <h4>
                 E-mail:
                  <span class="pull-right">
                      {{$dataListar->email}}
                    </span>
                 </h4>
             </li>
             <li>
                <h4>
                 Telefone:
                  <span class="pull-right">
                      {{$dataListar->telefone}}
                    </span>
                 </h4>
             </li>
             <li>
                <h4>
                 UBS:
                  <span class="pull-right">
                      {{$dataListar->ubsNome}}
                    </span>
                 </h4>
             </li>

           </ul>
         </div>
       </div>
       <!-- /.widget-user -->
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