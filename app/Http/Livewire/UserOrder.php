<?php

namespace App\Http\Livewire;
use App\Models\PackageType;

use Livewire\Component;

class UserOrder extends Component
{



    public $packageTypeId;
    public $packageTypes;


    public function render()
    {
        $this->packageTypes = PackageType::active()->get();
        return view('livewire.user-order');
    }
}
