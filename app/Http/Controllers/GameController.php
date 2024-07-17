<?php
namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('game.index', compact('games'));
    }

    public function create()
    {
        return view('game.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image',
            'game_name_en' => 'required|string|max:255',
            'game_name_mr' => 'required|string|max:255',
            'open_time' => 'required',
            'close_time' => 'required',
        ]);
        if ($request->hasFile('photo')) {
            $photoFile = $request->file('photo');
            $photoFileName = time() . '_' . $photoFile->getClientOriginalName();
            $photoFile->move(public_path('images'), $photoFileName);
            $photoPath = 'images/' . $photoFileName;
        }

        Game::create([
            'photo' => $photoPath,
            'game_name_en' => $request->game_name_en,
            'game_name_mr' => $request->game_name_mr,
            'open_time' => $request->open_time,
            'close_time' => $request->close_time,
            'disable' => 0,
        ]);

        return redirect()->route('game.index')->with('success', 'Game created successfully.');
    }

    public function edit(Game $game)
    {
        return view('game.edit', compact('game'));
    }

    public function update(Request $request, Game $game)
    {
        $request->validate([
            'photo' => 'image',
            'game_name_en' => 'required|string|max:255',
            'game_name_mr' => 'required|string|max:255',
            'open_time' => 'required',
            'close_time' => 'required',
        ]);
        if ($request->hasFile('photo')) {
            $photoFile = $request->file('photo');
            $photoFileName = time() . '_' . $photoFile->getClientOriginalName();
            $photoFile->move(public_path('images'), $photoFileName);
            $photoPath = 'images/' . $photoFileName;
        }

        $game->update([
            'game_name_en' => $request->game_name_en,
            'game_name_mr' => $request->game_name_mr,
            'open_time' => $request->open_time,
            'close_time' => $request->close_time,
        ]);

        return redirect()->route('game.index')->with('success', 'Game updated successfully.');
    }

    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('game.index')->with('success', 'Game deleted successfully.');
    }

    public function disable(Game $game)
    {
        $game->disable = !$game->disable;
        $game->save();

        return redirect()->route('game.index')->with('success', 'Game status updated successfully.');
    }
}
