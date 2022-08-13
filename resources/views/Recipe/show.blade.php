@extends('layout.master')

@section('content')
@include('inc.navbar')
    <div class="container">
        <h1 class="bg-success text-white text-center rounded p-2 m-2">
            Showing {{ $Recipes->food_name  }} by Chef {{ $Recipes->your_name }}
        </h1>

        <a href="{{ route('recipe') }}"> <i class="fa fa-arrow-left" ></i> Back</a>

    </div>


    <div class="container d-flex justify-content-center">
        <div class="card ">
            <div class="card-block py-4 mr-4">
                <div class="card-title bg-info rounded p-2 m text-white ">
                   <small> This food is known as </small> <h2>{{ $Recipes->food_name  }}</h2>
                </div>
                <div class="card-text ml-4 bg-light p-4 rounded">
                    <h6>{{ $Recipes->description  }}</h6>

                   <small>Major Ingredients are</small> <b>{{ $Recipes->ingredients  }}</b>
                </div>
                <small class="pull-right">
                    By Chef {{ $Recipes->your_name }}
                </small>
            </div>
        </div>

    </div>

    @if (auth()->check())
        @if (auth()->user()->username == $Recipes->your_name)
            <div class="container text-center my-4 w-50 d-flex justify-content-around">
                <div class="container">
                    <a href="{{ route('recipeedit', $Recipes->id) }}" class="btn btn-warning">Edit</a>
                </div>
                <div class="container">
                    <form action="{{ route('recipedelete', $Recipes->id) }}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this recipe?')">Delete Recipe</button>
                    </form>
                </div>
            </div>
        @endif
    @endif
@endsection