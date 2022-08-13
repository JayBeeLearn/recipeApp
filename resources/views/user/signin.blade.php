@extends('layout.master')

@section('content')
    <div class="container d-flex justify-content-center mt-4">
        <h2 class="bg-primary text-white text-center rounded p-2 m-2 w-75">
            Login
        </h2>

        
    </div>
        <p class="w-50">
            @include('inc.errmessages')
        </p>
   

    <div class="container">
        <div class="container w-50">
            <form action="{{ route('login') }}" method="POST">
                @csrf
               
                 <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Enter Your email" class="form-control">
                </div>

                 <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Enter a secure Password" class="form-control">
                </div>

                <div class="container text-center">
                    <button type="submit" class="btn btn-primary">Sign In</button>
                </div>

                <p>New User/Chef? <a href="{{ route('user') }}">Sign Up</a></p>

                
            </form>
        </div>
    </div>
  
@endsection