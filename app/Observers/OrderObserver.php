<?php

namespace App\Observers;

use App\Models\Order;
use App\Mail\OrderUpdateMail;
use App\Models\AutoAssignment;
use App\Models\PackageTypePricing;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class OrderObserver
{


    public function creating(Order $model)
    {
        $model->code = Str::random(10);
        $model->verification_code = Str::random(5);
        if (empty($model->user_id)) {
            $model->user_id = Auth::id();
        }
    }

    public function created(Order $model)
    {
     
        $model->sendOrderStatusChangeNotification($model, true);
    }


    public function updated(Order $model)
    {
       
        //
        $model->refresh();
    }
}
