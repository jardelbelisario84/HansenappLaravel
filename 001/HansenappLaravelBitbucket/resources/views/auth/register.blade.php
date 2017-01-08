@extends("painel.templates.index")
@section('slide')

@endsection

@section('content')
<div class="row top-10">
    
    <div class="col-md-5 col-md-offset-3">
        <h4>Formulário de registro</h4>
        <form method="POST" action="/auth/register" class="form">
            {!! csrf_field() !!}
            <div class="form-group">
                Name
                <input type="text" name="name" value="{{ old('name') }}"  class="form-control">
            </div>

            <div class="form-group">
                Email
                <input type="email" name="email" value="{{ old('email') }}"  class="form-control">
            </div>

            <div class="form-group">
                Password
                <input type="password" name="password"  class="form-control">
            </div>

            <div class="form-group">
                Confirm Password
                <input type="password" name="password_confirmation"  class="form-control">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-default">Register</button>
            </div>
        </form>

    </div>

</div>

@endsection