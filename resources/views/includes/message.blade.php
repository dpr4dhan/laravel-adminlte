@if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

@if(session()->get('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif

@if(session()->get('errors'))
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{ $error }}
        </div>
    @endforeach
@endif
