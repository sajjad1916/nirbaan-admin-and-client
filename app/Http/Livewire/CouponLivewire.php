<?php

namespace App\Http\Livewire;


use App\Models\User;
use App\Models\Coupon;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\DB;

class CouponLivewire extends BaseLivewireComponent
{

    //
    public $model = Coupon::class;

    //
    public $code;
    public $description;
    public $discount;
    public $percentage;
    public $expires_on;
    public $times;
    public $isActive = 1;


    //
    public $customQuery;

    protected $rules = [
        "code" => "required|string|unique:coupons",
        "discount" => "required|numeric",
        "expires_on" => "required|date",
    ];



    public function render()
    {

        return view('livewire.coupons');
    }




    public function save()
    {
        //validate
        $this->validate();

        try {

            DB::beginTransaction();
            $model = new Coupon();
            $model->code = $this->code;
            $model->description = $this->description;
            $model->discount = $this->discount;
            $model->percentage = $this->percentage ?? false;
            $model->expires_on = $this->expires_on;
            $model->times = $this->times;
            $model->is_active = $this->isActive;
            $model->creator_id = \Auth::id();
            $model->save();

            
           

            DB::commit();

            $this->dismissModal();
            $this->reset();
            $this->showSuccessAlert(__("Coupon") . " " . __('created successfully!'));
            $this->emit('refreshTable');
        } catch (Exception $error) {
            DB::rollback();
            $this->showErrorAlert($error->getMessage() ?? __("Coupon") . " " . __('creation failed!'));
        }
    }

    // Updating model
    public function initiateEdit($id)
    {
        $this->selectedModel = $this->model::find($id);
        $this->code = $this->selectedModel->code;
        $this->description = $this->selectedModel->description;
        $this->discount = $this->selectedModel->discount;
        $this->percentage = $this->selectedModel->percentage;
        $this->expires_on = $this->selectedModel->expires_on;
        $this->times = $this->selectedModel->times;
        $this->isActive = $this->selectedModel->is_active;

  

        $this->emit('showEditModal');
    }

    public function update()
    {
        //validate
        $this->validate(
            [
                "code" => "required|string|unique:coupons,code,".$this->selectedModel->id."",
                "discount" => "required|numeric",
                "expires_on" => "required|date",
            ]
        );

        try {

            DB::beginTransaction();
            $model = $this->selectedModel;
            $model->code = $this->code;
            $model->description = $this->description;
            $model->discount = $this->discount;
            $model->percentage = $this->percentage;
            $model->expires_on = $this->expires_on;
            $model->times = $this->times;
            $model->is_active = $this->isActive;
            $model->save();

       

            DB::commit();

            $this->dismissModal();
            $this->reset();
            $this->showSuccessAlert(__("Coupon") . " " . __('updated successfully!'));
            $this->emit('refreshTable');
        } catch (Exception $error) {
            DB::rollback();
            $this->showErrorAlert($error->getMessage() ?? __("Coupon") . " " . __('updated failed!'));
        }
    }

}
