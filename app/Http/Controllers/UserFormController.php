<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\Models\UserForm;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class UserFormController extends Controller
{
    public function index()
    {
        return view('user');
    }

    public function save(UserFormRequest $request)
    {
        $user = $request->all('firstname', 'lastname', 'email', 'password');

        $user['password'] = Hash::make($user['password']);

        $userData = '';

        UserForm::create($user);
        foreach ($user as $fieldData) {
            $userData .= $fieldData . ',';
        }
        Storage::disk('local')->append('users.csv', $userData);

        return redirect('/user-created')->with('success', 'Користувач успішно збереженний');
    }

    public function createdUser()
    {
        return view('user-created');
    }
}
