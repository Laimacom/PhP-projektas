@extends('layaouts.app')

@section('content')
    <div class="container">
    <table>
        <tr>
            <th>ID</th>
            <th>Data</th>
            <th>Numeris</th>
            <th>Atstumas</th>
            <th>Laikas</th>
            <th>Redaguoti</th>
            <th>Trinti</th>
        </tr>
        @foreach($radars as $radar)
            <tr>
                <td><a href="{{ url('radars', $radar->id) }}">{{$radar->id}}</a></td>
                <td><a href="{{ url('radars', $radar->id) }}">{{$radar->date}}</a></td>
                <td><a href="{{ url('radars', $radar->id) }}">{{$radar->number}}</a></td>
                <td><a href="{{ url('radars', $radar->id) }}">{{$radar->distance}}</a></td>
                <td><a href="{{ url('radars', $radar->id) }}">{{$radar->time}}</a></td>
                <td><a href="{{ url('radars', [$radar->id, 'edit']) }}">Redaguoti</a></td>
                <td><a href="{{ url('radars', [$radar->id, 'delete']) }}">Ištrinti</a></td>
            </tr>
        @endforeach
    </table>
    <br>
    <a class="btn btn-primary" href={{ url('radars/create') }}>{{ __('Naujas įrašas') }}</a>
    {{ $radars->links() }}
    </div>
@endsection
