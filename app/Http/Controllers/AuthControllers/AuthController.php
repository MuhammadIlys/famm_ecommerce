<?php

namespace App\Http\Controllers\AuthControllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.login');
    }

    public function user_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'password' => 'required|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $user = new User();
        $user->full_name = $request->full_name;
        $user->email = $request->email;
        $user->role = 'user';
        $user->password = bcrypt($request->password);

        if ($request->hasFile('photo')) {
            $fileName = $request->photo->store('user_images', 'public'); // Store in public/user_images
            $user->image = $fileName;
        }

        if ($user->save()) {
            $credentials = [
                'email' => $request->email,
                'password' => $request->password
            ];

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                if (Auth::user()->role == 'user') {
                    return redirect()->route('front.home');
                } else {
                    return redirect()->route('admin.dashboard');
                }
            }

            return redirect()->route('front.home')->with('success', 'Registration successful!');
        }
    }

    public function user_login(Request $request)
    {
        $user = User::where('email', $request->email);

        if ($user) {
            $credentials = [
                'email' => $request->email,
                'password' => $request->password
            ];

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                if (Auth::user()->role == 'user') {
                    return redirect()->route('front.home')->with('success', 'logged in successfully');
                } else {
                    return redirect()->route('admin.dashboard')->with('success', 'logged in successfully');
                }
            }
        } else {
            return redirect()->route('auth.login')->with('fail', 'User does not exist');
        }
    }
}
