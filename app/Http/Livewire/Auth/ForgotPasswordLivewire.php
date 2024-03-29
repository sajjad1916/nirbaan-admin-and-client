<?php

namespace App\Http\Livewire\Auth;

use App\Http\Livewire\BaseLivewireComponent;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Propaganistas\LaravelPhone\PhoneNumber;

class ForgotPasswordLivewire extends BaseLivewireComponent
{

    public $phone;
    public $setPassword = false;
    public $otp;
    public $idToken;
    public $password;
    public $password_confirmation;
    protected $listeners = ['allowReset' => 'showResetForm'];


    public function render()
    {
        return view('livewire.auth.forgot-password')->layout('layouts.auth');
    }


    public function initiateFireabse(){
        $this->emit('initiateFirebaseAuth', setting('apiKey', "") );
    }

    public function resetPassword(){

        $this->validate(
            [
                "phone" => 'phone:' . setting('countryCode', "GH") . '|required'
            ],
            [
                "phone.exists" => __("No account associated with phone")
            ]
        );

        $number = PhoneNumber::make($this->phone,'BD')->formatE164();


        $this->emit('sendOTP', $number);

    }
    //
    public function verifyOTP(){

        $this->validate([
            "otp" => "required|size:6"
        ]);
        $this->emit('verifyFirebaseAuth', $this->otp );

    }


    public function showResetForm( $idToken ){
        $this->idToken = $idToken;
        $this->setPassword = true;
    }

    public function saveNewPassword(){

        $this->validate([
            "password" => 'required|min:6',
            "password_confirmation" => 'required|same:password|min:6',
        ]);

        $number = PhoneNumber::make($this->phone,'BD')->formatE164();

        //
        if( !empty($this->idToken) ){
            $user = User::where('phone', $number)->first();
            $user->password = Hash::make($this->password);
            $user->Save();

            //
            $this->phone = "";
            $this->setPassword = false;
            $this->showSuccessAlert(__("Account password updated. You can now login with the newly created account password"));

        }

    }


}
