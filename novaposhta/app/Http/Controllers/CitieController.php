<?php

namespace App\Http\Controllers;

use App\Models\Citie;
use App\Models\Order;
use Illuminate\Http\Request;

class CitieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = Citie::all();
        // dd($cities);
        return view('citie.citie', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('citie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Citie $request)
    {
        
        $data = request()->validate([
            'name' => 'required|string',
        ]);
        Citie::create($data);
        return redirect()->route('citie.citie');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $citie = Citie::find($id);
    return view('citie.edit', compact('citie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = request()->validate([
            'name' => 'required|string',
        ]);
        $citie = Citie::find($id);
        $citie->update($data);
    
        return redirect()->route('citie.citie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $citie = Citie::find($id);
        $citie->delete();
        
        return redirect()->route('citie.citie');
    }
}
