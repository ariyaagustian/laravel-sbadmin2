<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Auth;
use Exception;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo;
    public function redirectTo()
    {
        switch(Auth::user()->role_id){
            case 2:
            $this->redirectTo = '/dashboard';
            return $this->redirectTo;
                break;
            case 4:
                    $this->redirectTo = '/dashboard';
                return $this->redirectTo;
                break;
            case 3:
                $this->redirectTo = '/dashboard';
                return $this->redirectTo;
                break;
            case 5:
                    $this->redirectTo = '/dashboard';
                return $this->redirectTo;
                break;
            case 6:
                $this->redirectTo = '/dashboard';
                return $this->redirectTo;
                break;
            case 1:
                $this->redirectTo = '/dashboard';
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
        }

        // return $next($request);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();

            if($finduser){
                Auth::login($finduser);
                return redirect('/dashboard');

            }else{

                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'role_id' => 3,
                    'google_id'=> $user->id,
                    'password'=> null
                ]);

                Auth::login($newUser);
                return redirect('/dashboard');
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

}
