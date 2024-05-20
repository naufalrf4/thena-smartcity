<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Roles;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/dashboard';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);
    
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
    
            $user = Auth::user();
            $role = Roles::find($user->role_id);
            $token = $user->createToken('token-name')->plainTextToken;
    
            if ($request->wantsJson()) {
                return response()->json([
                    'user' => $user,
                    'role' => $role,
                    'token' => $token,
                ]);
            }

            $request->session()->put('user', $user);
            $request->session()->put('role', $role);
            $request->session()->put('ses_token', $token);
    
            return redirect()->intended($this->redirectPath());
        }
    
        if ($request->wantsJson()) {
            return response()->json([
                'message' => 'User tidak ditemukan atau password salah.',
            ], 401);
        }
    
        return back()->withErrors([
            'email' => 'User tidak ditemukan atau password salah.',
        ]);
    }
    

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->forget(['user', 'role']);
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
