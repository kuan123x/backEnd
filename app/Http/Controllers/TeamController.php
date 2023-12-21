<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function update(Request $request, Team $team){
        $fields = $request->validate([
            'team_name' => 'string',
            'description' => 'string',
            'trophies' => 'string',

        ]);

        $team->update($fields);

        return response()->json([
            'status' => 'OK',
            'message' => 'team with ID# ' . $team->id . 'has been updated.'
        ]);

    }

    public function store(Request $request, Team $team){
        $fields = $request->validate([
            'team_name' => 'string',
            'description' => 'string',
            'trophies' => 'string',
        ]);

        $fields['team_name'] = $request->filled('team_name') ? $request->input('team_name') : null;

        $team = $team->create($fields);



        return response()->json([
            'status' => 'OK',
            'team' => $team,
            'message' => 'Team with ID#' . $team->id . ' has been created.'
        ]);

    }

    public function destroy(Team $team) {
        $details = $team->team_name;
        $team->delete();

        return response()->json([
            'status' => 'OK',
            'message' => "The $details has been deleted."
        ]);
    }

    public function index() {
        // $team = Team::orderBy('team_name')->get();

        $teams = Team::with('players')->orderBy('team_name')->get();

        return response()->json($teams);
    }

    public function view(Team $team) {

        return response()->json($team);
    }

}
