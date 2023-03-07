@section('title', 'User form')
<x-page-layout>
    <h1>Заповніть форму: </h1>
    <div class="row">
        <div class="mx-auto col-10 col-md-8 col-lg-6">
            <form action="">
                <div class="mb-3 form-group">
                    <label for="firstname" class="mb-3">Введіть ім'я:</label>
                    <input type="text" id="firstname" class="form-control">
                </div>
                <div class="mb-3 form-group">
                    <label for="lastname" class="mb-3">Введіть прізвище:</label>
                    <input type="text" id="lastname" class="form-control">
                </div>
                <div class="mb-3 form-group">
                    <label for="email" class="mb-3">Введіть email:</label>
                    <input type="email" id="email" class="form-control">
                </div>
                <div class="mb-3 form-group">
                    <label for="password" class="mb-3">Введіть пароль: </label>
                    <input type="password" id="password" class="form-control">
                </div>
                <div class="mb-3 form-group">
                    <label for="password-confirmation" class="mb-3">Повторіть пароль:</label>
                    <input type="password" id="password-confirmation" class="form-control">
                </div>
                <div class="mb-3 form-group">
                    <input type="submit" class="btn btn-primary" value="Зберегти дані" class="form-control">
                </div>
            </form>
        </div>
    </div>

</x-page-layout>
