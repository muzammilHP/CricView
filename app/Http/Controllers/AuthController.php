<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
class AuthController extends Controller
{
    public function signup(){
        return view('Auth.signup');
    }
    public function login(){
        return view('Auth.login');
    }
    public function store(Request $request){
        $request->validate([
            'username'=>'required|regex:/^[a-zA-Z0-9]+4$/',
            'email'=>'required|email|unique:customers,email',
            'contact'=>'required|numeric',
            'password'=>'required|min:8|confirmed',
        ], [
            'username.regex'=>'Username must contain only numbers and alphabets',
            'email.email'=>'Email must be a valid email address',
            'contact.numeric'=>'Contact must contain only numbers',
        ]);
        $customer=new Customer();
        $customer->username = $request->username;
        $customer->email = $request->email;
        $customer->contact = $request->contact;
        $customer->password = bcrypt($request->password);

        $customer->save();

        $credendials = $request->only('email','password');
        // Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('homepage');
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.email' => 'Email must be a valid email address.',
        ]);

        $customer = Customer::where('email', '=', $request->email)->first();

        if ($customer && password_verify($request->password, $customer->password)) {
            // Passwords match
            Auth::login($customer);

            if (Auth::check()) {
                return redirect()->route('matches');
            } else {

            }
        }else{
            return redirect()->route('login')->with('error', 'Invalid credentials');
        }
    }
}
