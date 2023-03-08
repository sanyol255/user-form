@if(session()->has('success'))
    <div class="container container--narrow">
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    </div>
@endif
