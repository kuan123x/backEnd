<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function update(Request $request, Player $player){
        $fields = $request->validate([
            'team_id' => 'integer',
            'name' => 'string',
            'ingame_name' => 'string',
            'rank' => 'string',
            'role' => 'string',

        ]);

        $player->update($fields);

        return response()->json([
            'status' => 'OK',
            'message' => 'player with ID# ' . $player->id . 'has been updated.'
        ]);

    }

    public function store(Request $request, Player $player){
        $fields = $request->validate([
            'team_id' => 'integer',
            'name' => 'string',
            'ingame_name' => 'string',
            'rank' => 'string',
            'role' => 'string',
        ]);

        $fields['name'] = $request->filled('name') ? $request->input('name') : null;

        $player = $player->create($fields);



        return response()->json([
            'status' => 'OK',
            'player' => $player,
            'message' => 'player with ID#' . $player->id . ' has been created.'
        ]);

    }

    public function destroy(Player $player) {
        $details = $player->name;
        $player->delete();

        return response()->json([
            'status' => 'OK',
            'message' => "The $details has been deleted."
        ]);
    }

    public function index() {
        $player = Player::with('team:id,team_name')->orderBy('name')->get();

        return response()->json($player);
    }

    public function view(Player $player) {

        $player->load('team');

        return response()->json($player);

    }

}
