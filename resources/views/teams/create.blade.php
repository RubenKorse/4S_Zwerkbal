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
    <h1>Nieuw team</h1>
	<form action="{{ route('teams.store') }}" method="POST">
		@csrf
		<div class="form-group">
			<label for="name">Naam team:</label>
			<input type="text" id="name" name="name" class="form-control">
		</div>
        <div class="form-group">
			<label for="name">Het soort team:</label>
			<input type="text" id="type" name="type" class="form-control">
		</div>
        <div class="form-group">
			<label for="name">De herkomst:</label>
			<input type="text" id="orgin" name="orgin" class="form-control">
		</div>
		<button type="submit">Opslaan</button>
	</form>
@endsection
