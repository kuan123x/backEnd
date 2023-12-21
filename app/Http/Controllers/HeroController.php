<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function update(Request $request, Hero $hero){
        $fields = $request->validate([
            'player_id' => 'integer',
            'hero_name' => 'string',
            'hero_type' => 'string',

        ]);

        $hero->update($fields);

        return response()->json([
            'status' => 'OK',
            'message' => 'hero with ID# ' . $hero->id . 'has been updated.'
        ]);

    }

    public function store(Request $request, Hero $hero){
        $fields = $request->validate([
            'player_id' => 'integer',
            'hero_name' => 'string',
            'hero_type' => 'string',
        ]);

        $fields['hero_name'] = $request->filled('hero_name') ? $request->input('hero_name') : null;

        $hero = $hero->create($fields);



        return response()->json([
            'status' => 'OK',
            'hero' => $hero,
            'message' => 'hero with ID#' . $hero->id . ' has been created.'
        ]);

    }

    public function destroy(Hero $hero) {
        $details = $hero->hero_name;
        $hero->delete();

        return response()->json([
            'status' => 'OK',
            'message' => "The $details has been deleted."
        ]);
    }

    public function index() {
        $hero = Hero::with('player:id,ingame_name')->orderBy('hero_name')->get();

        return response()->json($hero);
    }

    public function view(Hero $hero) {

        $hero->load('player');

        return response()->json($hero);
    }

}
