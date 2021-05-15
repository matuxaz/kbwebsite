<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Name;

class NamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $names = Name::all();
        return view('admin.names.index', compact('names'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.names.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Name::create($request->all());    // įvykdoma SQL užklausa, kuri išsaugo duomenis DB
// grįžtama į nuorodą 'admin/authors'; sesijoje išsaugome pranešimą 'success', kurio reikšmė yra tekstas 'Author added successfully.'
        return redirect('admin/names')->with('success', 'Name added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $names = Name::findOrFail($id);  // įvykdoma SQL užklausa, kuri išrenka vieną įrašą iš lentelės pagal ID reikšmę
        return view('admin.names.show', compact('names'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $names = Name::findOrFail($id);
        return view('admin.names.form', compact('names'));
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
        $names = Name::findOrFail($id);
        $names->update($request->all());   // įvykdoma SQL užklausa, kuri atnaujina duomenis DB
        return redirect('admin/names')->with('success', 'Name updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $names = Name::findOrFail($id);
        $names->delete();  // įvykdoma SQL užklausa, kuri pašalina duomenis iš DB
        return redirect('admin/names')->with('success', 'Name deleted successfully.');
    }
}
