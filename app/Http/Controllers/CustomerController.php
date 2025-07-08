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

class CustomerController extends Controller
{
    public function homepage(){
        return view('Customers.index');
    }
    public function matches(){
        return view('Customers.matches');
    }
    public function profile(){
        if (Auth::check()){
            $user = Auth::user();
            return view('Customers.profile',['user'=>$user]);
        } else {
            return redirect()->route('login');
        }
    }
    public function updateprofile(Request $request){
        $request->validate([
            'images' => 'image|mimes:jpeg,png,jpg|max:2048',
            'contact' => 'numeric',
            'username' => 'required|regex:/^[a-zA-z0-9]+$/',
            'email' => 'email',
        ],[
            'username.regex' => 'Username must contain only numbers and alphabets.',
            'email.email' => 'Email must be a valid email address.',
            'contact.numeric' => 'Contact must contain only numbers.',
        ]);
        $user = Auth::user();
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->contact = $request->input('contact');

        if($request->hasFile('images')){
            Storage::makeDirectory('public/profile_images');
            $imagePath = $request->file('images')->store('public/profile_images');
            $user->images = str_replace('public/', '' , $imagePath);
        }
        $user->save();
        return redirect()->back();
    }
    public function pchange_v(){
        return view('Customers.passwordchange');
    }
    public function changepassword(Request $request){
        $request->validate([
            'newPassword' => 'required|min:8|confirmed',
        ]);
        $user = Auth::user();
        $user->password = bcrypt($request->input('password'));
        $user->save();
        return redirect()->route('profile');
    }
    public function datatables(){
        $customers = Customer::all();
        return view('Customers.datatables', compact('customers'));
    }
    public function pak_aus(){
        return view('Customers.pak_aus');
    }
    public function bbl(){
        return view('Customers.bbl');
    }
    public function tickets(){
        return view('Customers.tickets');
    }
    public function pakaus_match2(){
        return view('Customers.pakaus_match2');
    }
    public function pakaus_match3(){
        return view('Customers.pakaus_match3');
    }
    public function optus(){
        return view('Customers.optus');
    }
    public function checkout(){
        return view('Customers.checkout');
    }
}