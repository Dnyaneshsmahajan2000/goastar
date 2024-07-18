<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;
use Svg\Tag\Rect;

class ResultController extends Controller
{

    public function index()
    {
        $games = Game::all()->where('disable', '0');

        return view('results.index', compact('games'));
    }
    public function storeOpenTimeResult(Request $request)
    {

        $result = new Result();
        $result->game_id = $request->game_id;
        $result->open_3 = $request->open_3;
        $result->open_1 = $request->open_1;
        $result->date = now()->format('Y-m-d');

        if (!empty($request->game_id)) {
            $result->save();
            if ($result) {
                return redirect()->route('results.index')->with('success', 'Data Inserted Successfully!');
            } else {
                return redirect()->route('results.index')->with('error', 'Data Failed to insert!');
            }
        } else {
            return redirect()->route('results.index')->with('error', 'Game ID is missing!');
        }
    }

    public function storeCloseTimeResult(Request $request)
    {
        $result = Result::find($request->game_id);
        // $result->game_id = $request->game_id;
        $result->close_3 = $request->close_3;
        $result->close_1 = $request->close_1;
        $result->date = now()->format('Y-m-d');

        if (!empty($request->game_id)) {
            $result->save();
            if ($result) {
                return redirect()->route('results.index')->with('success', 'Data Inserted Successfully!');
            } else {
                return redirect()->route('results.index')->with('error', 'Data Failed to insert!');
            }
        } else {
            return redirect()->route('results.index')->with('error', 'Game ID is missing!');
        }
    }
}
