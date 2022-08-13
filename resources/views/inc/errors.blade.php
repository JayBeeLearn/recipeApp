      @if ($errors->any())
        <div class="alert alert-danger w-75 ml-4">
            <strong>Whoops!</strong> There are some errors with your input 
        </div>
        <ul>
            @foreach ($errors->all() as $error)
                <li class="bg-warning text-danger p-2 rounded w-75">{{ $error }}</li>
            @endforeach
        </ul>
    @endif