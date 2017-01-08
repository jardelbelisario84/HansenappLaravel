@extends("auth.layout")

@section('content-auth')
<div class="login-box-body">
    <p class="login-box-msg">Faça o login para acessar o painel.</p>
    <form action="/login"  method="post">
      {!! csrf_field() !!}

      @if (count($errors) > 0)
       <ul>
            @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
             @endforeach
        </ul>
        @endif


      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email"/>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
        <input type="password" name="password" id="password" class="form-control" placeholder="Senha"/>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="row">
        <div class="col-xs-8">    

        </div><!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Logar</button>
      </div><!-- /.col -->
  </div>
</form>

<a href="/recuperar-senha">Esqueci minha senha!</a><br>

</div><!-- /.login-box-body -->
@endsection