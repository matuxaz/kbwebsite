<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;

class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::paginate(25);
        return view('admin.countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.countries.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Country::create($request->all());    // įvykdoma SQL užklausa, kuri išsaugo duomenis DB
// grįžtama į nuorodą 'admin/authors'; sesijoje išsaugome pranešimą 'success', kurio reikšmė yra tekstas 'Author added successfully.'
        return redirect('admin/countries')->with('success', 'Country added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $countries = Country::findOrFail($id);  // įvykdoma SQL užklausa, kuri išrenka vieną įrašą iš lentelės pagal ID reikšmę
        return view('admin.countries.show', compact('countries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $countries = Country::findOrFail($id);
        return view('admin.countries.form', compact('countries'));
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
        $countries = Country::findOrFail($id);
        $countries->update($request->all());   // įvykdoma SQL užklausa, kuri atnaujina duomenis DB
        return redirect('admin/countries')->with('success', 'Country updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $countries = Country::findOrFail($id);
        $countries->delete();  // įvykdoma SQL užklausa, kuri pašalina duomenis iš DB
        return redirect('admin/countries')->with('success', 'Country deleted successfully.');
    }
}
