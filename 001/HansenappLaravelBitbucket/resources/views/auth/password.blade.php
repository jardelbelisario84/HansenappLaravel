@extends("auth.layout")

@section('content-auth')

<div class="login-box-body">
    <p class="login-box-msg">Formulário Recuperação de senha.</p>
    <form action="recuperar-senha" method="POST">
       {!! csrf_field() !!}

       @if (count($errors) > 0)
       <ul>
            @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
             @endforeach
        </ul>
        @endif

    <div class="form-group has-feedback">
        <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Insira seu e-mail cadastrado no sistema">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    
    <div class="row">
        <div class="col-xs-8">    

        </div><!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Enviar</button>
      </div><!-- /.col -->
  </div>
</form>

<a href="/login">Voltar e fazer login.</a><br>

</div><!-- /.login-box-body -->

@endsection