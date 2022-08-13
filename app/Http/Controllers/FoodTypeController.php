<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class FoodTypeController extends Controller
{
    public function latest(){
        $Recipes = Recipe::latest()->paginate(4);
        return view('recipe.types.latest', compact('Recipes'));
    }

    public function continental()
    {
        $ContinentalRec = Recipe::latest()->where('food_type', 'continental')->paginate(4);
        return view('recipe.types.continental', compact('ContinentalRec'));
    }

    public function african()
    {
        $AfricanRec = Recipe::latest()->where('food_type', 'african')->paginate(4);
        return view('recipe.types.african', compact('AfricanRec'));
    }

    public function european()
    {
        $EuropeanRec = Recipe::latest()->where('food_type', 'european')->paginate(4);
        return view('recipe.types.european', compact('EuropeanRec'));
    }


    public function american()
    {
        $AmericanRec = Recipe::latest()->where('food_type', 'american')->paginate(4);
        return view('recipe.types.american', compact('AmericanRec'));
    }

    public function nigerian()
    {
        $NigerianRec = Recipe::latest()->where('food_type', 'nigerian')->paginate(4);
        return view('recipe.types.nigerian', compact('NigerianRec'));
    }


    public function others()
    {
        $OtherRec = Recipe::latest()->where('food_type', 'other')->paginate(4);
        return view('recipe.types.others', compact('OtherRec'));
    }
}
