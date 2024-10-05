<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showLoginForm() {
        return view('auth.login');
    }

    public function login(Request $request) {
        // Валидация
        $validator = Validator::make($request->all(), [
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Попытка авторизации
        if (Auth::attempt(['login' => $request->login, 'password' => $request->password])) {
            return redirect()->intended('/');
        }

        // Аутентификация не удалась
        return redirect()->back()->withErrors(['login' => 'Неверный логин или пароль'])->withInput();
    }

    public function logout() {
        Auth::logout();
        return redirect()->intended('/');
    }
}
