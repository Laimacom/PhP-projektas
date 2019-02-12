@extends('layaouts.app')

@section('content')

<h1>Irasas Id {{$driver->id}}</h1>
<table>
    <tr><td>Vardas</td><td>{{$driver->name}}</td></tr>
    <tr><td>Miestas</td><td>{{$driver->city}}</td></tr>
</table>

@endsection
