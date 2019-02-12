@extends('layaouts.app')

@section('content')

<h1>Irasas Id {{$radar->id}}</h1>
<table>
    <tr><td>Data</td><td>{{$radar->date}}</td></tr>
    <tr><td>Number</td><td>{{$radar->number}}</td></tr>
    <tr><td>Distance</td><td>{{$radar->distance}}</td></tr>
    <tr><td>Time</td><td>{{$radar->time}}</td></tr>
</table>

@endsection
