<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Ledger;
use App\Models\transaction;
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

        return view('home');
    }
}
