@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <table class="table table-light table-hover">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @canImpersonate($user->id)
                        <form action="{{route('impersonations.store')}}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                            <button class="btn btn-info btn-sm">Personificar</button>
                        </form>
                        @endcanImpersonate
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
