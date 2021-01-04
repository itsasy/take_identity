@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-4 offset-md-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title text-center">
                    <strong>Bienvenido {{auth()->user()->name}}</strong>
                </h5>
            </div>
            <div class="card-body">
                <strong>Email:</strong> {{auth()->user()->email}}
            </div>
        </div>
    </div>
</div>
@endsection
