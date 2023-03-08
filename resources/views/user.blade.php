@section('title', 'User form')
<x-page-layout>
    <h1>Заповніть форму: </h1>
    <div class="row">
        <div class="mx-auto col-10 col-md-8 col-lg-6">
            <form action="{{ route('save-user') }}" method="POST">
                @csrf
                <x-user-form />
            </form>
        </div>
    </div>
</x-page-layout>
