<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Roles;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/login';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'unique:users,username'],
            'no_telp' => ['required', 'string', 'unique:users,no_telp'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'kecamatan_id' => ['required'],
            'kelurahan_id' => ['required'],
            'rt' => ['required'],
            'rw' => ['required'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'no_telp' => $data['no_telp'],
            'email' => $data['email'],
            'role_id' => 4,
            'password' => Hash::make($data['password']),
            'kecamatan_id' => $data['kecamatan_id'],
            'kelurahan_id' => $data['kelurahan_id'],
            'rt' => $data['rt'],
            'rw' => $data['rw'],
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        if ($user) {
            Auth::login($user);

            $request->session()->put('user', $user);

            $role = Roles::find($user->role_id);
            $request->session()->put('role', $role);

            $token = $user->createToken('token-name')->plainTextToken;
            $request->session()->put('ses_token', $token);

            return redirect()->route('login')->with('success', 'Akun anda telah terbuat, silahkan login');
        } else {
            return redirect()->back()->with('error', 'Gagal membuat akun.')->withInput();
        }
    }
}
