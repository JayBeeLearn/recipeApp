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
          @include('inc.messages')
      </span>

  </div>

  @if (count($Recipes)>0)
  {{-- All the 
    Latest Recipes 
    in the Database  --}}
        <div class="container mb-4">
             <h2 class="text-center">
                Latest Recipes
            </h2>
                <div class="row d-flex mb-4">
                    @foreach ($Recipes as $recipe)
                        <div class="col-sm -sm-4 user m-2 px-2 pt-2 ">

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

            @if (count($Recipes)>3)
                    <div class="container  text-center">
                        <h5 class=""><a href="{{ route('latest') }}">View More</a></h5>
                    </div> 
            @endif 
                
            
        </div> 


            {{-- All the latest 
            Continental recipes 
            are found below here  --}}
        <div class="container ">
            @if (count($ContinentalRec)>0)
                <h2 class="text-center">
                    Continental Recipes
                </h2>
                    <div class="row d-flex mb-4">
                        @foreach ($ContinentalRec as $recipe)
                            <div class="col-sm -sm-4 user m-2 px-2 pt-2 ">

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
                @if (count($ContinentalRec)>3)
                    <div class="container  text-center">
                        <h5 class=""><a href="{{ route('continental') }}">View More</a></h5>
                    </div> 
                @endif 
            @endif      
        </div>


        {{-- All The Latest African 
            Recipes are found 
            below here  --}}

        <div class="container ">
            @if (count($AfricanRec)>0)
                <h2 class="text-center">
                    African Recipes
                </h2>
                    <div class="row d-flex mb-4">
                        @foreach ($AfricanRec as $recipe)
                            <div class="col-sm -sm-4 user m-2 px-2 pt-2 ">

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
                @if (count($AfricanRec)>3)
                    <div class="container  text-center">
                        <h5 class=""><a href="{{ route('african') }}">View More</a></h5>
                    </div> 
                @endif 
            @endif      
        </div>


        {{-- All the latest 
            European recipes 
            are found below here  --}}
        <div class="container ">
            @if (count($EuropeanRec)>0)
                <h2 class="text-center">
                    European Recipes
                </h2>
                    <div class="row d-flex mb-4">
                        @foreach ($EuropeanRec as $recipe)
                            <div class="col-sm -sm-4 user m-2 px-2 pt-2 ">

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
                @if (count($EuropeanRec)>3)
                    <div class="container  text-center">
                        <h5 class=""><a href="{{ route('european') }}">View More</a></h5>
                    </div> 
                @endif 
            @endif      
        </div>



        {{-- All the latest 
            American recipes 
            are found below here  --}}
        <div class="container ">
            @if (count($AmericanRec)>0)
                <h2 class="text-center">
                    American Recipes
                </h2>
                    <div class="row d-flex mb-4">
                        @foreach ($AmericanRec as $recipe)
                            <div class="col-sm -sm-4 user m-2 px-2 pt-2 ">

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
                @if (count($AmericanRec)>3)
                    <div class="container  text-center">
                        <h5 class=""><a href="{{ route('american') }}">View More</a></h5>
                    </div> 
                @endif 
            @endif      
        </div>

            {{-- All the latest 
            Nigerian recipes 
            are found below here  --}}
        <div class="container ">
            @if (count($NigerianRec)>0)
                <h2 class="text-center">
                    Nigerian Recipes
                </h2>
                    <div class="row d-flex mb-4">
                        @foreach ($NigerianRec as $recipe)
                            <div class="col-sm -sm-4 user m-2 px-2 pt-2 ">

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
                @if (count($NigerianRec)>3)
                    <div class="container  text-center">
                        <h5 class=""><a href="{{ route('nigerian') }}">View More</a></h5>
                    </div> 
                @endif 
            @endif      
        </div>

         {{-- All the latest 
            Other recipes 
            are found below here  --}}
        <div class="container ">
            @if (count($OtherRec)>0)
                <h2 class="text-center">
                    Other Recipes
                </h2>
                    <div class="row d-flex mb-4">
                        @foreach ($OtherRec as $recipe)
                            <div class="col-sm -sm-4 user m-2 px-2 pt-2 ">

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
                @if (count($OtherRec)>3)
                    <div class="container  text-center">
                        <h5 class=""><a href="{{ route('others') }}">View More</a></h5>
                    </div> 
                @endif 
            @endif      
        </div>

        
    @else
      There are no recipes, create one!
    @endif
    

    
    

  
@endsection