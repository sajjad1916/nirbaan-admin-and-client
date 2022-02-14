<?php

namespace App\Http\Livewire;

use App\Models\Coupon;
use App\Models\Order;
use App\Models\PaymentMethod;
use App\Models\User; 
use App\Models\CouponUser;
use App\Models\DeliveryZone;
use App\Models\Vendor;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class NewOrderLivewire extends BaseLivewireComponent
{

    protected $listeners = [
        'showCreateModal' => 'showCreateModal',
        'showEditModal' => 'showEditModal',
        'showDetailsModal' => 'showDetailsModal',
        'showAssignModal' => 'showAssignModal',
        'initiateEdit' => 'initiateEdit',
        'initiateDelete' => 'initiateDelete',
        'removeModel' => 'removeModel',
        'initiateAssign' => 'initiateAssign',
        'initiateSubcategoriesAssign' => 'initiateSubcategoriesAssign',
        'initiatePayout' => 'initiatePayout',
        'dismissModal' => 'dismissModal',
        'refreshView' => '$refresh',
        'select2Change' => 'select2Change',
        'vendorsChange' => 'vendorsChange',
        'managersChange' => 'managersChange',
        'paymentMethodsChange' => 'paymentMethodsChange',
        'vendorChange' => 'vendorChange',
        'changeVendorTiming' => 'changeVendorTiming',
        'changeFCMToken' => 'changeFCMToken',
        'logout' => 'logout',
        'reviewPayment' => 'reviewPayment',
        'customerChange' => 'customerChange',
        'autocompleteUserSelected' => 'autocompleteUserSelected',
        'photoSelected' => 'photoSelected',
        'autocompleteDriverSelected' => 'autocompleteDriverSelected',
        'autocompleteVendorSelected' => 'autocompleteVendorSelected',
       
    ];


    public $showSummary = false;
    public $vendorID = 1;
    public $vendor;
    public $paymentMethods;
    public $couponCode;
    public $userId;
   
    public $paymentMethodId;
    public $coupon;
    public $newOrder;
    public $vendors;
    public $packageTypeId;
    public $packageTypes;

    public $customerName;
    public $customerPhone;
    public $customerAddress;
    public $weight;
    public $productPrice;
    public $merchantAddress;
    public $preferedTime;
    public $productClass;
    public $preferedDate;
    public $deliveryFee;
    public $deliveryHub;

    public $sizeAmount;

    public $productClasses = [
        "0"=>"None",
        "1" => "ভঙ্গুর",
        "2" => "তরল"
    ];


    public function mount()
    {
        //
        if (\Auth::user()->hasRole('manager')) {
            $this->vendorSearchClause = [
                "id" => \Auth::user()->vendor_id
            ];
        }
    }

    // New order
    public function showCreateModal()
    {
        $this->loadCustomData();
        $this->showCreate = true;
    }

    


    public function autocompleteDriverSelected($driver)
    {
        try {
            $this->deliveryBoyId = $driver['id'];
        } catch (\Exception $ex) {
            logger("Error", [$ex]);
        }
    }

    public function autocompleteDeliveryZone($deliveryArea)
    {
        try {
            $this->deliveryHub =DeliveryZone::where('name',$deliveryArea['name']);
        } catch (\Exception $ex) {
            logger("Error", [$ex]);
        }
    }

  
    public function applyDiscount()
    {
        $this->coupon = Coupon::with('vendors')->active()->where('code', $this->couponCode)->first();
        if (empty($this->coupon)) {
            $this->addError('couponCode', __('Invalid Coupon Code'));
        } else {
            $this->resetValidation('couponCode');
        }
    }

    public function showOrderSummary()
    {
      

        $this->newOrder = $this->getOrderData();
        $this->stopRefresh = true;
        $this->showSummary = true;
    }

    public function saveNewOrder()
    {

        //
        try {
            DB::beginTransaction();
            $this->newOrder = $this->getOrderData();
            $this->newOrder->save();
            $this->newOrder->setStatus("pending");

            //save the coupon used
            $coupon = Coupon::where("code", $this->couponCode)->first();
            if (!empty($coupon)) {
                $couponUser = new CouponUser();
                $couponUser->coupon_id = $coupon->id;
                $couponUser->user_id = \Auth::id();
                $couponUser->order_id = $this->newOrder->id;
                $couponUser->save();
            }

            //so apps can be notified 
            $this->newOrder->updated_at = \Carbon\Carbon::now();
            $this->newOrder->save();

            DB::commit();
            $this->showSuccessAlert(__("New Order successfully!"));

            $this->showSummary = false;
            $this->showCreate = false;
            $this->reset();
            $this->emit('clearAutocompleteFieldsEvent');
            // $this->emit('refreshTable');
        } catch (\Exception $ex) {
            DB::rollback();
            $this->showErrorAlert($ex->getMessage() ?? __("New Order failed!"));
        }
    }


    //get order
    public function getOrderData()
    {
        
        $this->deliveryFee= 0 ;
        
        $order = new Order();
        if (empty($this->packageTypeId)) {
            $this->packageTypeId = 1;
            $order->package_type_id = $this->packageTypes->first()->id;
        } else {
            $order->package_type_id = $this->packageTypeId;
        }
        $order->vendor_id = 1;
        $order->user_id = Auth::id();
        if (empty($this->paymentMethodId)) {
            $order->payment_method_id = $this->paymentMethods->first()->id;
        } else {
            $order->payment_method_id = $this->paymentMethodId;
        }

        
        $order->customerName = $this->customerName ?? "None";
        $order->customerPhone = $this->customerPhone ?? "None";
        $order->customerAddress = $this->customerAddress ?? "None";
        $order->weight = $this->weight ?? 0;
        $order->productPrice = $this->productPrice ?? 0;

        $order->merchantAddress = $this->merchantAddress ?? "None";
        
        $order->preferedTime = $this->preferedTime ?? "None";
        $order->preferedDate = $this->preferedDate ?? "None";
        

        $order->productClass = $this->productClass ?? "None";
        $order->deliveryHub  = $this->deliveryHub ?? "None";
        

        //cash payment
        if ($order->payment_method->slug == "cash") {
            $order->payment_status = "successful";
        }
        $order->note = $this->note;
        $order->created_at = Carbon::now();
        $order->updated_at = Carbon::now();


        
        // if (!empty($this->coupon)) {
        //     //
        //     $couponVendors = $this->coupon->vendors;
        //     $couponVendorsIds = $this->coupon->vendors->pluck('id')->toArray();
          
        //     if (count($couponVendors) == 0) {

        //         if ($this->coupon->percentage) {
        //             $order->delivery_fee = $order->delivery_fee * ($this->coupon->discount / 100);
        //         } else {
        //             $order->delivery_fee = $this->coupon->discount;
        //         }
        //     } 
        //      else if (count($couponVendors) > 0) {
        //         //check if vendor is part of listed vendors coupon can be applied
        //         if (in_array($this->newOrder->vendor_id, $couponVendorsIds)) {
        //             if ($this->coupon->percentage) {
        //                 $order->delivery_fee = $order->delivery_fee * ($this->coupon->discount / 100);
        //             } else {
        //                 $order->delivery_fee = $order->delivery_fee * $this->coupon->discount;
        //             }
        //         }
        //     } else {
        //         $order->delivery_fee = $this->deliveryFee;
        //     }
        // } else {
        //     $order->delivery_fee = $this->deliveryFee;
        // }
        
        

        if (!empty($this->weight)){
            
            if($this->weight > 0 && $this->weight <= 1){
                $this->sizeAmount = 30;
            }
            else if($this->weight > 1 && $this->weight <= 2){
                $this->sizeAmount = 60;
            }
            else if($this->weight > 2 && $this->weight <= 3){
                $this->sizeAmount = 90;
            }
            else if($this->weight > 3 && $this->weight <= 4){
                $this->sizeAmount = 120;
            }
            else if($this->weight > 4 && $this->weight <= 5){
                $this->sizeAmount = 150;
            }
            else if($this->weight > 5){
                $this->sizeAmount = 220;
            }
            
        } 
        
        if($this->packageTypeId =="1"){
             $this->deliveryFee = $this->sizeAmount + 30;
        }
        else if ($this->packageTypeId =="2"){
             $this->deliveryFee = $this->sizeAmount + 90;
        }

        else if ($this->packageTypeId =="3"){
            $this->deliveryFee = $this->sizeAmount + 120;
       }
        

        //delivery fee
        

        
        
        $order->delivery_fee = $this->deliveryFee;
        $order->total = intval($this->productPrice) - intval($this->deliveryFee);
        return $order;
    }
}
