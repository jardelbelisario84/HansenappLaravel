@extends("auth.layout")

@section('content-auth')
<div class="login-box-body">
    <p class="login-box-msg">Formulário de recuperação de senha.</p>
    <form action="/resetar-senha"  method="post">
      {!! csrf_field() !!}
        
       <input type="hidden" name="token" value="{{ $token }}">

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
        <input type="password" name="password" id="password" class="form-control" placeholder="Insira nova senha"/>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>

    <div class="form-group has-feedback">
        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirme a senha">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>

    <div class="row">
        <div class="col-xs-8">    

        </div><!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Salvar</button>
      </div><!-- /.col -->
  </div>
</form>
</div><!-- /.login-box-body -->
@endsection