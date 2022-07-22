<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Auth\JsonResponse;
use App\Http\Controllers\MailController;


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
            'nrp' => ['required', 'string', 'min:9', 'max:9'],
            'email' => ['required', 'string', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'],
            'password_confirmation' => ['required', 'string'],
        ], [
            'nrp.min' => "NRP must have 9 characters",
            'nrp.max' => "NRP must have 9 characters",
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'nrp' => $data['nrp'],
            'email' => $data['email'],
            'nama' => $data['nama'],
            'password' => Hash::make($data['password']),
            'tiket_vote' => 5,
            'divisi' => 'Umum',
            'verificated' => 0
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    public function register(Request $request)
    {
        $request->validate([
            'nrp' => ['required', 'string', 'min:9', 'max:9'],
            'email' => ['required', 'string', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required', 'string'],
        ], [
            'nrp.min' => "NRP must have 9 characters",
            'nrp.max' => "NRP must have 9 characters",
        ]);
        
        $user = new User();
        $user->nrp = $request->nrp;
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->tiket_vote = 5;
        $user->divisi = "Umum";
        $user->verificated = 0;
        $user->save();

        if($user != null){
            return redirect()->back()->with(session()->flash('alert-success', 'Your account has been created. Please login for verification link.'));
        }

        return redirect()->back()->with(session()->flash('alert-danger', 'Something went wrong!'));
    }

    // public function verifyUser(Request $request){
    //     $verification_code = \Illuminate\Support\Facades\Request::get('code');
    //     $user = User::where(['verification_code' => $verification_code])->first();
    //     if($user != null){
    //         $user->verificated = 1;
    //         $user->save();
    //         return redirect()->route('login')->with(session()->flash('alert-success', 'Your account is verified. Please login!'));
    //     }
    //     return redirect()->route('login')->with(session()->flash('alert-danger', 'Invalid verification code!'));
    // }
}