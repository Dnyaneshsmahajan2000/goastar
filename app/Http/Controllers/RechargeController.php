<?php

namespace App\Http\Controllers;

use App\Models\Dealer;
use App\Models\Recharge;
use Illuminate\Http\Request;

class RechargeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recharges =Recharge::all();
        return view('recharge.index',compact('recharges'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dealers = Dealer::all();
        return view('recharge.create', compact('dealers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'dealer_id'=>'required',
            'date'=>'required',
            'amount'=>'required',
        ]);
        //return $request->all();
        $recharge =new Recharge();
        $recharge->dealer_id=$request->dealer_id;
        $recharge->date=$request->date;
        $recharge->amount=$request->amount;
        $recharge->details=$request->details;
        $recharge->save();
        return redirect()->route('recharge.index')->with('Success','Recharge Added Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Recharge $recharge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recharge $recharge,$id)
    {
        $recharge=Recharge::findOrFail($id);
        $dealers = Dealer::all();
        return view('recharge.edit',compact('recharge', 'dealers'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $recharge=Recharge::findOrFail($id);
        $recharge->dealer_id=$request->dealer_id;
        $recharge->date=$request->date;
        $recharge->amount=$request->amount;
        $recharge->details=$request->details;
        $recharge->save();
        return redirect()->route('recharge.index')->with('success','Dealer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recharge $recharge,$id)
    {
        $recharge=Recharge::findOrFail($id);
        $recharge->delete();
        return redirect()->route('recharge.index')->with('Dealer Deleted Successfully');
    }
} 
