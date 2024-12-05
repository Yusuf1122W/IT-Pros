<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index() {
        // Fetch all teams
        $teams = Team::all();

        // Pass teams to the view
        return view('teams.index', ['teams' => $teams]);
    }

    public function create() {
        return view('teams.index');
    }

    public function store(Request $request) {
        $newTeam = new Team;
        $newTeam->name = $request->name;
        $newTeam->school = $request->school;
        $newTeam->save();

        return redirect()->route('teams.index');
    }

    public function edit(Team $team) {
        return view('teams.edit', ['team' => $team]);


        $players = '<textarea class="players" name="players" id="players" cols="30" rows="10"></textarea>';
        print_r(explode(" ", $players));
    }

    public function update(Request $request, Team $team) {
        $team->name = $request->name;
        $team->school = $request->school;
        $team->save();

        return redirect()->route('teams.index');
    }

    public function destroy(Team $team) {
        $team->delete();
        return redirect()->route('teams.index');
    }
}
