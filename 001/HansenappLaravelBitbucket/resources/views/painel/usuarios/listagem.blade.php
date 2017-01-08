@extends('painel.layout')
@section('content-panel')
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">

      <div class="box">
        <div class="box-header">
          <div class="col-md-12">
            <h3 class="box-title"><b>LISTAGEM DE USUÁRIOS (view Listagem)</b></h3>
            <a href="/panel/usuarios/adicionar" class="btn btn-primary pull-right"> Adicionar novo Usuário</a>
          </div>
        </div><!-- /.box-header -->
        <hr>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Nível de Acesso</th>
                <th>UBS</th>
                <th style="width: 100px;">Ações</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $usuario)
              <tr>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->telefone}}</td>
                <td>
                   @if($usuario->permissao == '1')
                    <span class="label label-black">
                      Desenvolvedor
                    </span>
                   @elseif($usuario->permissao == '2')
                    <span class="label label-info">
                      Administrador
                    </span>
                   @else
                    <span class="label label-success">
                      Enfermeiro(a)
                    </span>
                   @endif
                   
                </td>
                <td>
                  @if($usuario->ubsNome)
                    {{$usuario->ubsNome}}
                  @else
                    Falta Cadastrar
                  @endif
                </td>
                <td>
                  <div class="btn-group">
                    <a href="/panel/usuarios/listar/{{$usuario->id}}" type="button" class="btn btn-primary" title="Visualizar Perfil"> <i class="fa  fa-eye"></i></a>
                    <a href="/panel/usuarios/editar/{{$usuario->id}}" type="button" class="btn btn-success" title="Editar Perfil"> <i class="fa  fa-edit"></i></a>
                    <a href="/panel/usuarios/deletar/{{$usuario->id}}" type="button" class="btn btn-danger" title="Deletar Perfil"> <i class="fa   fa-close"></i></a>
                  </div>
                </td>
              </tr>
              @endforeach

            </tbody>
            <tfoot>
              <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Nível de Acesso</th>
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