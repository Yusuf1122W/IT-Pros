<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    public function index() {
        // Fetch all teams
        $tournaments = Tournament::all();

        // Pass teams to the view
        return view('tournaments.index', ['tournaments' => $tournaments]);
    }

    public function create() {
        return view('tournaments.create');
    }

    public function store(Request $request) {
        $newTournament = new Tournament;
        $newTournament->title = $request->title;
        $newTournament->max_teams = $request->max_teams;
        $newTournament->started = $request->started;
        $newTournament->save();

        return redirect()->route('tournaments.index');
    }

    public function edit(Tournament $tournament) {
        return view('tournaments.edit', ['tournaments' => $tournament]);
    }

    public function update(Request $request, Tournament $tournament) {
        $tournament->title = $request->title;
        $tournament->max_teams = $request->max_teams;
        $tournament->started = $request->started;
        $tournament->save();

        return redirect()->route('tournaments.index');
    }

    public function destroy(Tournament $tournament) {
        $tournament->delete();
        return redirect()->route('tournament.index');
    }
}
