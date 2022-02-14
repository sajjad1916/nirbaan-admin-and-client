<?php

namespace App\Http\Livewire\Auth;

use App\Http\Livewire\BaseLivewireComponent;
use App\Models\VendorType;
use App\Models\DeliveryZone;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Propaganistas\LaravelPhone\PhoneNumber;
use Illuminate\Support\Facades\Hash;



class UserRegistration extends BaseLivewireComponent
{
    
    public $deliveryZone;
    public $deliveryArea;

    public $actypes=[
        "0"=>"None",
        "1" => "Bkash Personal",
        "2" => "Bkash Merchant",
        "3" => "Nagad Personal",
        "4" => "Nagad Merchant"
    ];
    public $actype;
    public $acno;

    public $name;
    public $phone;
    public $email;
    public $address;
    public $agreedVendor;
    public $password;
    
  
    public function userSignup()
    {


        $this->validate(
            [
                "agreedVendor" => "accepted",
                "name" => "required",
                "address" => "required",
                "phone" => "required|phone:" . setting('countryCode', "BD"),
                "password" => "required|string|min:6",
                "actype" => "required"
            ]
        );
        
        //
        try {

            //
            $phone = PhoneNumber::make($this->phone,'BD')->formatE164();
            
            //
            $user = User::where('phone', $phone)->first();
            if (!empty($user)) {
                throw new Exception(__("Account with phone already exists"), 1);
            }

            

            DB::beginTransaction();
            //
            $user = new User();
            $user->name = $this->name;
            $user->email = $this->email;
            $user->phone = $phone;
            $user->userAddress =$this->address;
            $user->password = Hash::make($this->password);
            $user->save();
            //assign role
            $user->assignRole('client');

            DB::commit();
            $this->showSuccessAlert(__("Account Created Successfully. Your account will be reviewed and you will be notified via email/sms when account gets approved. Thank you"), 100000);
            $this->reset();
        } catch (Exception $error) {
            DB::rollback();
            $this->showErrorAlert($error->getMessage() ?? __("An error occurred please try again later"), 100000);
        }
    }


    public function render()
    {
        if ($this->deliveryZone == null) {
            $this->deliveryZone = DeliveryZone::get();
        }
        
        return view('livewire.auth.user-registration')->layout('layouts.auth');
    }
}
