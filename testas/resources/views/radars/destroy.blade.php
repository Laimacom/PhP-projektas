@extends('layaouts.app')

@section('content')

    <div class="container">
        <h1>Ištrinti įrašą</h1>

        <form method="post" action="{{ url('radars', $radar->id) }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <div>id: {{$radar->id}}</div>
            <div>Date: {{$radar->date}}</div>
            <div>Number: {{$radar->number}}</div>
            <div>Distance: {{$radar->distance}}</div>
            <div>Time: {{$radar->time}}</div>

            <button type="submit">Ištrinti įrašą</button>
        </form>

    </div>

@endsection