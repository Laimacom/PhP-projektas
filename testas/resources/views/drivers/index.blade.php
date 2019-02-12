@extends('layaouts.app')

@section('content')
    <div class="container">
        <table>
            <tr>
                <th>ID</th>
                <th>Vardas</th>
                <th>Miestas</th>
                <th>Redaguoti</th>
                <th>Trinti</th>
            </tr>
            @foreach($drivers as $driver)
                <tr>
                    <td><a href="{{ url('drivers', $driver->id) }}">{{ $driver->id }}</a></td>
                    <td><a href="{{ url('drivers', $driver->id) }}">{{ $driver->name }}</a></td>
                    <td><a href="{{ url('drivers', $driver->id) }}">{{ $driver->city }}</a></td>
                    <td><a href="{{ url('drivers', [$driver->id, 'edit']) }}">Redaguoti</a></td>
                    <td><a href="{{ url('drivers', [$driver->id, 'delete']) }}">Ištrinti</a></td>
                </tr>
            @endforeach
        </table>
        <br>
        <a class="btn btn-primary" href={{ url('drivers/create') }}>{{ __('Naujas įrašas') }}</a>
        {{--{{ $drivers->links() }}--}}
    </div>
@endsection
