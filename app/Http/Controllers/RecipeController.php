<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    // The index page method 
    public function home(){
        return view('recipe.index');
    }

    public function index(Recipe $Recipes)
    {
        $Recipes = Recipe::latest()->paginate(4);
        // dd($Recipes);


        $ContinentalRec = Recipe::latest()->where('food_type', 'continental')->paginate(4);
        // dd($ContinentalRec);
        $AfricanRec = Recipe::latest()->where('food_type', 'african')->paginate(4);
        $EuropeanRec = Recipe::latest()->where('food_type', 'european')->paginate(4);
        $AmericanRec = Recipe::latest()->where('food_type', 'american')->paginate(4);
        $NigerianRec = Recipe::latest()->where('food_type', 'nigerian')->paginate(4);
        $OtherRec = Recipe::latest()->where('food_type', 'other')->paginate(4);


        return view('recipe.home', compact('Recipes', 'ContinentalRec', 'AfricanRec', 'EuropeanRec', 'NigerianRec', 'AmericanRec', 'OtherRec'));


    }

    public function create(){
        return view('recipe.create');
    }

    public function store(Request $request){

        $this->validate($request,[
            'your_name' => 'required',
            'food_name' => 'required',
            'description' => 'required',
            'ingredients' => 'required',
            'food_type' => 'required'
        ]);

        Recipe::create($request->all());

        return redirect()->route('recipe')->with('message', 'Recipe Created Successfully');

    }

    public function list(Recipe $Recipes){
        $Recipes = Recipe::all();

        // dd($Recipes);

        return view('recipe.list', compact('Recipes'));

    }

    public function show(Recipe $Recipes)
    {
        return view('recipe.show',
            compact('Recipes')
        );
    }

    public function edit(Recipe $Recipes){
        return view('recipe.edit', compact('Recipes'));
    }

    public function update(Recipe $Recipes, Request $request){

        $recipe = $Recipes;
        $this->validate($request, [
            'your_name' => 'required',
            'food_name' => 'required',
            'description' => 'required',
            'ingredients' => 'required',
            'food_type' => 'required'
        ]);

        $recipe->update($request->all());

        return redirect()->route('recipe')->with('message', 'Recipe Updated Successfully');


    }

   


    public function destroy(Recipe $Recipes){
        $Recipes->delete();
        // dd('successfuel');
        return redirect()->route('recipe')->with('message', 'Recipe Deleted Successfully');
    }
}
