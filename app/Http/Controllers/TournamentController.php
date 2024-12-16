<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tournament;

class TournamentController extends Controller
{


    // Methode voor het weergeven van alle toernooien
    public function index()
    {
        $tournaments = Tournament::all(); // Haal alle toernooien op uit de database
        return view('tournaments.index', compact('tournaments')); // Geef ze door aan de view
    }

    // Methode voor het weergeven van een formulier om een nieuw toernooi aan te maken
    public function create()
    {
        return view('tournaments.create'); // Toon de 'create'-view
    }

    // Methode voor het opslaan van een nieuw toernooi
    public function store(Request $request)
    {
        // Valideer de gegevens
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'max_teams' => 'required|integer|min:2',
            'started' => 'nullable|date',
        ]);

        // Maak een nieuw toernooi aan
        $newTournament = new Tournament();
        $newTournament->title = $validatedData['title'];
        $newTournament->max_teams = $validatedData['max_teams'];
        $newTournament->started = $validatedData['started'];
        $newTournament->save();

        // Redirect naar de lijst met toernooien
        return redirect()->route('tournaments.index')->with('success', 'Tournament created successfully!');
    }
}
