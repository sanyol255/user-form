@if(session()->has('failed'))
    <div class="container container--narrow">
        <div class="alert alert-danger text-center">
            {{ session('failed') }}
        </div>
    </div>
@endif
