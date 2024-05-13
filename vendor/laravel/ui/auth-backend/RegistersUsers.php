<?php

namespace Illuminate\Foundation\Auth;

use App\Models\Roles;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

trait RegistersUsers
{
    use RedirectsUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $validatedData = $this->validator($request->all())->validate();
        $user = $this->create($request->all());

        if ($user) {
            // event(new Registered($user));

            $this->guard()->login($user);

            if ($response = $this->registered($request, $user)) {
                
                return redirect()->route('login')->with('success', 'Akun anda telah terbuat, silahkan login');
            }

            // return $request->wantsJson()
            //     ? new JsonResponse([], 201)
            //     : redirect($this->redirectPath());
            return redirect()->back()->with('success', 'Akun anda telah terbuat, silahkan login manual');
            
        } else {
            return redirect()->back()->error()->withInput();
        }
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        $request->session()->put('user', $user);

        $role = Roles::find($user->role_id);
        $request->session()->put('role', $role);

        $token = $user->createToken('token-name')->plainTextToken;
        $request->session()->put('ses_token', $token);

    }
}
