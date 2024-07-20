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
        $results = Result::all();
        return view('results.index', compact('results'));

    }
    public function create()
    {
        $games = Game::all()->where('disable', '0');
        return view('results.create', compact('games'));
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
    public function edit($id)
    {
        $result = Result::findOrFail($id);
        $game = Game::findOrFail($result->game_id);
        return view('results.edit', compact('result', 'game'));
    }

    public function update(Request $request, $id)
    {

        $result = Result::findOrFail($id);
        $result->open_3 = $request->open_3;
        $result->open_1 = $request->open_1;
        $result->close_3 = $request->close_3;
        $result->close_1 = $request->close_1;
        $result->save();
        return redirect()->route('results.index')->with('success', 'Result updated successfully.');
    }



    public function storeCloseTimeResult(Request $request, $id)
    {
        // return $request->all();
        $result = Result::findOrFail($id);
        // return $result = Result::findOrFail($id);
        // $result->game_id = $request->game_id;
        $result->close_3 = $request->close_3;
        $result->close_1 = $request->close_1;
        $result->date = now()->format('Y-m-d');

        if (!empty($request->game_id)) {
            $result->save();
            if ($result) {
                return redirect()->route('results.index')->with('success', 'Data Updated Successfully!');
            } else {
                return redirect()->route('results.index')->with('error', 'Data Failed to Updated!');
            }
        } else {
            return redirect()->route('results.index')->with('error', 'Game ID is missing!');
        }
    }

    public function delete(Result $result,$id)
    {
        $result=Result::findOrFail($id);
        $result->delete();
        return redirect()->route('results.index')->with('Result Deleted Successfully');
    }
}
