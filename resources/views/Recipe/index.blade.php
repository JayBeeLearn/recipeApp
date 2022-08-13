@extends('layout.master')

@section('content')
    @include('inc.navbar')

  <h1 class="bg bg-primary rounded text-center text-white p-2 m-2">
      Welcome to the Great Recipe Pages
  </h1>

  <div class="container m-2 d-flex justify-content-between" >
      <span class="m-2">
        <a href="{{ route('recipecreate') }}" class="btn btn-info rounded text-white " >
            Create New Recipes 
            <i class="fa fa-plus-circle"> </i>
        </a>
      </span>

      <span class="m-2">
          <a href="{{ route('recipe') }}" class="btn btn-success rounded text-white " >
                View Recipes 
                <i class="fa fa-street-view" aria-hidden="true"></i>        
            </a>
      </span>

  </div>

@endsection