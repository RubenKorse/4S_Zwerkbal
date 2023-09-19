@extends('layout')

@section('nav')
    <nav>
        <a href="/">Home</a>
        <a href="/tournaments">Toernooien</a>
        <a href="/teams" class="active">Teams</a>
        <a href="/players">Spelers</a>
    </nav>
@endsection

@section('content')

    <h1>Teams</h1>
    <a href="{{ route('teams.create') }}">+ nieuw team</a>
    <table class="table">
        <tr>
            <th>Team</th>
            <th>Soort</th>
            <th>Herkomst</th>
            <th>&nbsp;</th>
        </tr>
        @foreach($teams as $team)
            <tr>
                <td>{{ $team->name }}</td>
                <td>{{ $team->type }}</td>
                <td>{{ $team->orgin }}</td>
                <td><a href="{{ route('teams.edit', $team->id) }}">Aanpassen</a></td>
            </tr>
        @endforeach
    </table>

@endsection
