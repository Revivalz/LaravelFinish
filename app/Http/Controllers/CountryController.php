<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view("countries.index", compact("countries"));
    }
        public function show(Country $country) {
        return view("countries.show", compact("country"));
    }
    public function create()
    {
        return view('countries.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
        "name" => ["required", "max:100"],
        "area_km2" => ["required", "numeric"],
        "population" => ["required", "integer"]
    ]);
          
        Country::create([
        "name" => $request->name,
        "area_km2" => $request->area_km2,
        "population" => $request->population
    ]);
    
    {
        return redirect("/countries");
    }
    }
    public function edit(Country $country)
    {
        return view('countries.edit', compact('country'));
    }

    public function update(Request $request, Country $country)
    {
        $validated = $request->validate([
            "name" => ["required", "max:100"],
            "area_km2" => ["required", "numeric"],
            "population" => ["required", "integer"]
        ]);

        $country->name = $validated["name"];
        $country->area_km2 = $validated["area_km2"];
        $country->population = $validated["population"];
        $country->save();

        return redirect("/countries/{$country->id}");
    }

    public function destroy(Country $country)
    {
        $country->delete();

        return redirect('/countries');
    }
}

