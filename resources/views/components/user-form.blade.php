<div class="mb-3 form-group">
    <label for="firstname" class="mb-3">Введіть ім'я:</label>
    @error('firstname')
    <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
    @enderror
    <input name="firstname" value="{{ old('firstname') }}" type="text" id="firstname" class="form-control">
</div>
<div class="mb-3 form-group">
    <label for="lastname" class="mb-3">Введіть прізвище:</label>
    @error('lastname')
    <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
    @enderror
    <input name="lastname" value="{{ old('lastname') }}" type="text" id="lastname" class="form-control">
</div>
<div class="mb-3 form-group">
    <label for="email" class="mb-3">Введіть email:</label>
    @error('email')
    <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
    @enderror
    <input name="email" value="{{ old('email') }}" type="email" id="email" class="form-control">
</div>
<div class="mb-3 form-group">
    <label for="password" class="mb-3">Введіть пароль: </label>
    @error('password')
    <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
    @enderror
    <input name="password" type="password" id="password" class="form-control">
</div>
<div class="mb-3 form-group">
    <label for="password-confirmation" class="mb-3">Повторіть пароль:</label>
    @error('password-confirmation')
    <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
    @enderror
    <input name="password_confirmation" type="password" id="password-confirmation" class="form-control">
</div>
<div class="mb-3 form-group">
    <input type="submit" class="btn btn-primary form-control" value="Зберегти дані">
</div>
