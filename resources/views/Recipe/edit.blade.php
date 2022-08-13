@extends('layout.master')

@section('content')
    <div class="container">
        <h1 class="bg-primary text-white text-center rounded p-2 m-2">
             Edit {{ $Recipes->food_name }} by {{ $Recipes->your_name }}
        </h1>
    </div>


    <div class="container d-flex justify-content-around ">
        <div class="container m-2 w-75 ">
            <form action="{{ route('recipeupdate', $Recipes->id) }}" method="POST">
                @csrf
                @method('PUT')
               
                <div class="form-group">
                    <label for="food_name">Food Name</label>
                    <input type="text" name="food_name" class="form-control" value="{{ $Recipes->food_name }}">
                </div>

                <div class="form-group">
                    <label for="description">Description </label>
                    <textarea name="description" class="form-control" >{{ $Recipes->description }} </textarea>
                </div>

                <div class="form-group">
                    <label for="ingredients">Ingredients </label>
                    <input type="text" name="ingredients" class="form-control" value="{{ $Recipes->ingredients }}">
                </div>

                <div class="form-group  d-flex justify-content-around">
                    <a href="{{ route('recipe') }}" class="btn btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-success">Save Changes</button>
                </div>

            </form>
        </div>
    </div>
@endsection