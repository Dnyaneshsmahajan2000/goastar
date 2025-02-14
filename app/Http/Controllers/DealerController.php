<?php

namespace App\Http\Controllers;

use App\Models\Dealer;
use Illuminate\Http\Request;

class DealerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dealers = Dealer::all();
        return view('dealer.index', compact('dealers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dealer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'name' => 'required',
            'mobile' => 'required|min:10|max:10',
            'city' => 'required',
            'state' => 'required',
            
        ]);
        $dealer = new Dealer();
        $dealer->name = $request->name;
        $dealer->mobile = $request->mobile;
        $dealer->email = $request->email;
        $dealer->city = $request->city;
        $dealer->state = $request->state;
        $dealer->save();
        return redirect()->route('dealer.index')->with('success', 'Dealer Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dealer $dealer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dealer=Dealer::findOrFail($id);
        return view('dealer.edit',compact('dealer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $dealer=Dealer::findOrFail($id);
        $dealer->name=$request->name;
        $dealer->mobile=$request->mobile;
        $dealer->email=$request->email;
        $dealer->city=$request->city;
        $dealer->state=$request->state;
        $dealer->save();
        return redirect()->route('dealer.index')->with('success','Dealer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dealer $dealer ,$id)
    {
        $dealer=Dealer::findOrFail($id);
        $dealer->delete();
        return redirect()->route('dealer.index')->with('Dealer Deleted Successfully');
    }
}
