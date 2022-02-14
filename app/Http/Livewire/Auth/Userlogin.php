<?php

namespace App\Http\Livewire\Auth;

use App\Http\Livewire\BaseLivewireComponent;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Propaganistas\LaravelPhone\PhoneNumber;

class Userlogin extends BaseLivewireComponent
{

    public $email;
    public $phone;
    public $password;
    public $remember = true;

    public function userlogin()
    {


        $this->validate(
            [
                "phone" => 'phone:' . setting('countryCode', "GH") . '|required',
                "password" => "required",
            ],
            [
                "phone.exists" => __("Phone not associated with any account")
            ]
        );

     
        $number = PhoneNumber::make($this->phone,'BD')->formatE164();
        
        //
        $user = User::where('phone', $number)->first();
       

        
        if (!$user) {
            $this->showErrorAlert("Please enter valid information");
            return;
        }

        if (Hash::check($this->password, $user->password) && Auth::attempt(['email'=>$this->email, 'password' => $this->password], $this->remember)) {
            //
            $user->syncFCMToken($this->fcmToken);
            return redirect()->route('dashboard');
        } else {
            $this->showErrorAlert(__("Invalid Credentials. Please check your credentials and try again"));
        }
    }

    public function render()
    {
        return view('livewire.auth.userlogin')->layout('layouts.auth');
    }
}
