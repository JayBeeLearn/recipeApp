@extends('layout.master')

@section('content')
    <div class="container">
        <h1 class="bg-primary text-center text-white p-2 m-2 rounded">Create Your New Recipes</h1>

        @include('inc.errors')
    </div>

  

    <div class="container m-2">
        <form action="{{ route('recipestore') }}" method="POST">
            @csrf
            <div class="form-group">
                {{-- <label for="your_name" >Your Name</label> --}}
                <input type="hidden" name="your_name" class="form-control" value="{{ auth()->user()->username }}">
            </div>

            <div class="form-group">
                <label for="food_name">Food Name</label>
                <input type="text" name="food_name" class="form-control" placeholder="Enter The Name of The Food You Are Making">
            </div>

            <div class="form-group">
                <label for="description">Description </label>
                <textarea name="description" class="form-control" placeholder="Food Description"> </textarea>
            </div>

            <div class="form-group">
                <label for="ingredients">Ingredients </label>
                <input type="text" name="ingredients" class="form-control" placeholder="The Secrets Ingredients that makes it yummy">
            </div>

            <div class="form-group">
                <select name="food_type" id="" class=" form-control">
                    <option selected>Choose Food Type ... </option>
                    <option value="continental">Continental</option>
                    <option value="african">African</option>
                    <option value="european">European</option>
                    <option value="american">American</option>
                    <option value="nigerian">Nigerian</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="form-group  d-flex justify-content-around">
                <a href="{{ route('recipe') }}" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>

        </form>
    </div>
@endsection