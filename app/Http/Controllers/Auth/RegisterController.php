<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Symfony\Contracts\Service\Attribute\Required;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
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

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        // try{
            // $validatedData = validator($data, [
            //     'name' => 'required',
            //     'username' => 'required|unique:users,username',
            //     'no_telp' => 'required|unique:users,no_telp',
            //     'email' => 'required|unique:users,email',
            //     'password' => 'required|string|min:8',
            //     'password_confirmation' => 'required|string|min:8|same:password',
            //     'kecamatan_id' => 'required',
            //     'kelurahan_id' => 'required',
            //     'rt' => 'required',
            //     'rw' => 'required',
            // ])->validate();
    
            $user = User::create([
                'name' => $data['name'],
                'username' => $data['username'],
                'no_telp' => $data['no_telp'],
                'email' => $data['email'],
                'role_id' => 4,
                'password' => $data['password'],
                'kecamatan_id' => $data['kecamatan_id'],
                'kelurahan_id' => $data['kelurahan_id'],
                'rt' => $data['rt'],
                'rw' => $data['rw'],
                // 'foto_profil' => $validatedData['foto_profil'],
            ]);

            return $user;

            // auth()->login($User);

            // return $this->guard()->attempt(
            //     $this->credentials($User), $User->boolean('remember')
            // );

            // Redirect to the intended page or any other logic you desire
            // return redirect()->route('home'); 

            // $User->save();

            // return redirect()->back()->with('success', 'Akun anda telah terbuat');
    
        // } catch (ValidationException $e) {
        //     $errors = $e->validator->errors()->all();
        //     // You can return these errors to the view or handle them as needed
        //     return redirect()->back()->withErrors($errors)->withInput();
        //     // return redirect()->route('pegawai.index')->withErrors('error', $e->getMessage());
        // }
    }
}
