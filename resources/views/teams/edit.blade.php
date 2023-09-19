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
    <h1>Team aanpassen</h1>
    <form action="{{ route('teams.update', $team) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Naam team</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $team->name }}">
        </div>
        <div class="form-group">
			<label for="name">Het soort team:</label>
			<input type="text" id="type" name="type" class="form-control" value="{{ $team->type }}">
		</div>
        <div class="form-group">
			<label for="name">De herkomst:</label>
			<input type="text" id="orgin" name="orgin" class="form-control" value="{{ $team->orgin }}">
		</div>
        <button type="submit">Opslaan</button>
    </form>
@endsection
