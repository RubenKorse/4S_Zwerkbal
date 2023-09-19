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

@if($errors->any())
    <ul class="errors">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif

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
            <select id="type" name="type" class="form-control">
            <option value="{{ $team->type }}">{{ $team->type }}</option>
                <option value="school">School</option>
                <option value="country">Country</option>
                <option value="commercial">Commercial</option>
            </select>
		</div>
        <div class="form-group">
			<label for="name">De herkomst:</label>
			<input type="text" id="orgin" name="orgin" class="form-control" value="{{ $team->orgin }}">
		</div>
        <button type="submit">Opslaan</button>
    </form>
@endsection
