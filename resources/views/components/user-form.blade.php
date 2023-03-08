<div class="mb-3 form-group">
    <label for="firstname" class="mb-3">Введіть ім'я:</label>
    <input name="firstname" value="{{ old('firstname') }}" type="text" id="firstname" class="form-control">
    @error('firstname')
    <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
    @enderror
</div>
<div class="mb-3 form-group">
    <label for="lastname" class="mb-3">Введіть прізвище:</label>
    <input name="lastname" value="{{ old('lastname') }}" type="text" id="lastname" class="form-control">
    @error('lastname')
        <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
    @enderror
</div>
<div class="mb-3 form-group">
    <label for="email" class="mb-3">Введіть email:</label>
    <input name="email" value="{{ old('email') }}" type="email" id="email" class="form-control">
    @error('email')
    <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
    @enderror
</div>
<div class="mb-3 form-group">
    <label for="password" class="mb-3">Введіть пароль: </label>
    <input name="password" type="password" id="password" class="form-control">
    @error('password')
    <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
    @enderror
</div>
<div class="mb-3 form-group">
    <label for="password-confirmation" class="mb-3">Повторіть пароль:</label>
    <input name="password_confirmation" type="password" id="password-confirmation" class="form-control">
    @error('password-confirmation')
    <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
    @enderror
</div>
<div class="mb-3 form-group">
    <input type="submit" class="btn btn-primary form-control" value="Зберегти дані">
</div>
