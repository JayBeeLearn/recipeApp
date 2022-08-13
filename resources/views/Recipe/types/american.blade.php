@extends('layout.master')

@section('content')
    @include('inc.navbar')
    <div class="container ">
        <h2 class="bg-primary text-center text-white m-2 p-2 rounded">
            All The American Recipes
        </h2>
    </div>

    

   <div class="row d-flex mb-4">
        @foreach ($AmericanRec as $recipe)
            <div class="col-sm -sm-4 user m-2 px-2 pt-2 ">

                <div class="pix">
                    <img src="" alt="Picture of {{ $recipe->food_name }}" >
                </div>

                <h2 class="text-center"><a href="{{ route('recipeshow', $recipe->id) }}" >{{ $recipe->food_name }}</a></h2>
                
                <h6 class="bg-light p-2 rounded">
                    {{ $recipe->description }}
                </h6>

                <p class="pull-right">
                    <small>Recipe by Chef {{ $recipe->your_name }}</small>
                </p>
            </div>
        @endforeach

    </div>

    {{ $AmericanRec->links() }}

    <div class="container">
        <a href="{{ route('recipe') }}">Explore Others</a>
    </div>
@endsection 