<?php

namespace App\Http\Controllers;

use App\Models\Team; // Team-model in plaats van Tournament-model
use App\Models\User;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    // ...

    public function index()
    {
        $teams = Team::all(); // Alle teams ophalen in plaats van toernooien
        return view('teams/index')
            ->with('teams', $teams); // Geef teams door aan de view in plaats van toernooien
    }

    public function create()
    {
        return view('teams/create'); // Gebruik de create-weergave voor teams
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'orgin' => 'required'
        ]);

        $team = new Team(); // Maak een nieuw team aan
        $team->name = $request->name;
        $team->type = $request->type;
        $team->orgin = $request->orgin;
        $team->save();

        return redirect()->route('teams.index'); // Redirect naar de lijst met teams
    }

    public function edit(Team $team)
    {
        return view('teams/edit')
            ->with('team', $team); // Geef het team door aan de edit-weergave
    }

    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'orgin' => 'required'
        ]);

        $team->name = $request->name;
        $team->type = $request->type;
        $team->orgin = $request->orgin;
        $team->save();

        return redirect()->route('teams.index'); // Redirect naar de lijst met teams
    }

    public function destroy(Team $team)
    {
        // Voeg logica toe om een team te verwijderen als dat nodig is
    }
}
