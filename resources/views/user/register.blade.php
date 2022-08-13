@extends('layout.master')

@section('content')
    <div class="container">
        <h2 class="bg-primary text-white text-center rounded p-2 m-2">
            Register to Share Your Favourite Recipes to The Rest of The World
        </h2>
    </div>

    <div class="container">
        <div class="container w-50">
            <form action="{{ route('userregister') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Enter Your Name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="username">User Name</label>
                    <input type="text" name="username" placeholder="Enter Your User Name" class="form-control">
                </div>

                 <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Enter Your email" class="form-control">
                </div>

                 <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Enter a secure Password" class="form-control">
                </div>


                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" placeholder="Re-Enter your Password" class="form-control">
                </div>

                <div class="container text-center">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>

                <p>
                    Already have and account? <a href="{{ route('login') }}">Login</a>
                </p>
                
            </form>
        </div>
    </div>
  
@endsection