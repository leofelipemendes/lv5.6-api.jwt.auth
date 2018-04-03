@extends('layout.main')

@section('content')

<table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
        </tr>        
    </thead>
    <tbody>
        @foreach($users as $u)
        <tr>
            <td>{{$u->username}}</td>
            <td>{{$u->email}}</td>
        </tr> 
        @endforeach
    </tbody>
</table>
@stop