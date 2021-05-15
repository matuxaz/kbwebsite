<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Name;

class NamesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $names = Name::all()->sortBy("id");   // naudojam modelį Author; ši eilutė įvykdo SQL užklausą "SELECT * FROM `authors`"; taip pat išrūšiuojam autorius pagal pavardę
        return view('user.names.index', compact('names'));  // nurodom kokiame vaizde bus atvaizduojami duomenys ir perduodam duomenis (masyvą authors) vaizdui
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|alpha',   // laukas privalomas|galima įvesti tik raides
            'lastname' => 'required|alpha',  // laukas gali būti tuščias|galima įvesti tik raides
            'age' => 'required|integer'
        ],[
            'firstname.required' => 'Vardas yra privalomas laukas.',
            'firstname.alpha' => 'Vardas gali būti sudarytas tik iš raidžių.',
            'lastname.required' => 'Pavarde yra privalomas laukas.',
            'lastname.alpha' => 'Pavarde gali būti sudarytas tik iš raidžių.',
            'age.required' => 'Amzius yra privalomas laukas.',
            'age.alpha' => 'Amzius gali būti sudarytas tik iš sveiku skaiciu.',
        ]);
    }
}
