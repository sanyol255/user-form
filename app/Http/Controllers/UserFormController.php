<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\Models\UserForm;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Helpers\Constants;

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

        $userInfo = 'ім\'я: ' . $user['firstname'] . ' ' . $user['lastname'] . ' email: ' . $user['email'];

        if ($this->duplicatedEmail($user['email'])) {
            Log::channel('registration')->critical(Constants::FAILED_REGISTRATION . $userInfo);
            return redirect('/user-duplicated')->with('failed', Constants::FAILED_MESSAGE);
        } else {
            UserForm::create($user);

            $userData = '';

            foreach ($user as $fieldData) {
                $userData .= $fieldData . ',';
            }

            Storage::disk('local')->append('users.csv', $userData);

            Log::channel('registration')->info(Constants::SUCCESS_REGISTRATION . $userInfo);
            return redirect('/user-created')->with('success', Constants::SUCCESS_MESSAGE);
        }
    }

    public function createdUser()
    {
        return view('user-created');
    }

    public function duplicatedUser()
    {
        return view('user-duplicated');
    }

    public function duplicatedEmail($email)
    {
        $content = Storage::get('users.csv');

        $contentArray = explode(',', $content);

        if (in_array($email, $contentArray)) {
           return true;
        }
        return false;
    }
}
