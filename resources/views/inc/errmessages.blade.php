@if ($message = Session::get('message'))
    <div class="container d-flex justify-content-center">
        <div class="alert alert-danger w-50 mx-4">
            <p> <b>{{ $message }}</b></p>
         </div>
    </div>
    
@endif