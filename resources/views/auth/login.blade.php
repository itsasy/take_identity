@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="row">
    <div class="col-md-4 offset-md-4">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Acceso a la aplicación
                </div>
            </div>
            <div class="card-body">
                <form action="#" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" type="text" name="email" placeholder="Ingresa tu correo" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" type="password" name="password"
                            placeholder="Ingresa tu contraseña">
                    </div>
                    <button class="btn btn-primary btn-block">Aceptar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
