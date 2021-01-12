<?php

namespace App\Http\Controllers;

use App\Citzien;
use Illuminate\Http\Request;

class CitzienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citziens = Citzien::all();
        return view('citziens.index', compact('citziens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('citziens.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'citzien_full_name' => 'required',
            'citzien_gender'    => 'required',
            'citzien_city'      => 'required',
            'citzien_nid'       => 'required|max:10|min:10',
            'citzien_mobile'    => 'required',
            'citzien_address'   => 'required',
        ]);

        Citzien::create($request->all());

        return redirect()->route('citziens.index')
            ->with('success', 'Citzien created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Citzien  $citzien
     * @return \Illuminate\Http\Response
     */
    public function show(Citzien $citzien)
    {
        return view('citziens.show', compact('citzien'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Citzien  $citzien
     * @return \Illuminate\Http\Response
     */
    public function edit(Citzien $citzien)
    {
        return view('citziens.edit', compact('citzien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Citzien  $citzien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Citzien $citzien)
    {
        $request->validate([
            'citzien_full_name' => 'required',
            'citzien_gender'    => 'required',
            'citzien_city'      => 'required',
            'citzien_nid'       => 'required|max:10|min:10',
            'citzien_mobile'    => 'required',
            'citzien_address'   => 'required',
        ]);

        $citzien->update($request->all());

        return redirect()->route('citziens.index')
            ->with('success', 'Citzien updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Citzien  $citzien
     * @return \Illuminate\Http\Response
     */
    public function destroy(Citzien $citzien)
    {
        $citzien->delete();

        return redirect()->route('citziens.index')
            ->with('success', 'Citzien deleted successfully');
    }
}
