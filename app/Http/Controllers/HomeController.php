<?php

namespace App\Http\Controllers;

use App\Models\Dealer;
use App\Models\Game;
use App\Models\Group;
use App\Models\Ledger;
use App\Models\Recharge;
use App\Models\Result;
use App\Models\transaction;
use App\Models\User;
use App\Models\VchGstSalePurchase;
use App\Models\VchSalePurchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $users = User::count();
        $games = Game::count();
        $results = Result::count();
        $dealers = Dealer::count();
        $recharges = Recharge::sum('amount');
        return view('home', compact('users','games','results','dealers', 'recharges'));
    }
}
