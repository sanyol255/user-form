<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\Models\UserForm;
//use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

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
//        $user = [
//            'firstname' => $request->firstname,
//            'lastname' => $request->lastname,
//            'email' => $request->email,
//            'password' => Hash::make($request->password)
//        ];

        UserForm::create($user);
//        Storage::disk('public')->put('filetest.txt', 'Your content here');

        return redirect('/')->with('success', 'Користувач успішно збереженний');
    }
}
