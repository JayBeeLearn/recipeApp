@if ($message = Session::get('message'))
    <div class="alert alert-success">
        <p> <b>{{ $message }}</b></p>
    </div>
@endif