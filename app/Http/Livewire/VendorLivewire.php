<?php

namespace App\Http\Livewire;

use App\Models\Vendor;
use App\Models\User;
use App\Models\VendorType;
use Exception;
use Illuminate\Support\Facades\DB;

class VendorLivewire extends BaseLivewireComponent
{

    //
    public $model = Vendor::class;
    public $showDayAssignment = false;
    public $showNewDayAssignment = false;

    //
    public $name;
    public $description;
    public $base_delivery_fee;
    public $delivery_fee;
    public $phone;
    public $email;
    public $address;
    public $isActive;
    public $vendor_type_id;
    public $vendorTypes;
    public $isPackageVendor = false;

    protected $rules = [
        "name" => "required|string",
        "description" => "required|string",
        "base_delivery_fee" => 'nullable|sometimes|numeric|required_if:is_package_vendor,0,false',
        "delivery_fee" => 'nullable|sometimes|numeric|required_if:is_package_vendor,0,false',
        "vendor_type_id" => 'required|exists:vendor_types,id',
        "phone" => "required|numeric",
        "email" => "required|email|unique:vendors,email",
        "address" => "required|string",
    ];


    protected $messages = [
        "email.unique" => "Email already used by another vendor",
    ];

    public function render()
    {
        $this->vendorTypes = VendorType::active()->get();
        return view('livewire.vendors');
    }


    public function updatedVendorTypeId($value)
    {
        //
        $vendorType = VendorType::find($value);
        $this->isPackageVendor = $vendorType->slug == "parcel";
    }

    public function showCreateModal()
    {
        $this->reset();
        $this->showCreate = true;
        $this->vendorTypes = VendorType::active()->get();
        $this->vendor_type_id = $this->vendorTypes->first()->id;
        $this->updatedVendorTypeId($this->vendor_type_id);
        $this->emit('initialAddressSelected', '');
    }

    public function save()
    {
        //validate
        $this->validate();

        try {

            DB::beginTransaction();
            $model = new Vendor();
            $model->name = $this->name;
            $model->description = $this->description;
            $model->base_delivery_fee = $this->base_delivery_fee ?? 0;
            $model->delivery_fee = $this->delivery_fee ?? 0;
            $model->phone = $this->phone;
            $model->email = $this->email;
            $model->address = $this->address; 
            $model->is_active = $this->isActive ?? false;       
            $model->vendor_type_id = $this->vendor_type_id;
          
            //creator
            $model->creator_id = \Auth::id();
            $model->save();

            DB::commit();

            $this->dismissModal();
            $this->reset();
            $this->showSuccessAlert(__("Vendor") . " " . __('created successfully!'));
            $this->emit('refreshTable');
        } catch (Exception $error) {
            DB::rollback();
            $this->showErrorAlert($error->getMessage() ?? __("Vendor") . " " . __('creation failed!'));
        }
    }

    // Updating model
    public function initiateEdit($id)
    {
        $this->selectedModel = $this->model::find($id);
        $this->name = $this->selectedModel->name;
        $this->description = $this->selectedModel->description;
        $this->base_delivery_fee = $this->selectedModel->base_delivery_fee;
        $this->delivery_fee = $this->selectedModel->delivery_fee;
        $this->phone = $this->selectedModel->phone;
        $this->email = $this->selectedModel->email;
        $this->address = $this->selectedModel->address;
        $this->isActive = $this->selectedModel->is_active;
        $this->vendor_type_id = $this->selectedModel->vendor_type_id;
        

        
        //
        $this->updatedVendorTypeId($this->selectedModel->vendor_type_id);

      
        $this->emit('showEditModal');
        $this->emit('initialAddressSelected', $this->address);
    }

    public function update()
    {
        //validate
        $this->validate(
            [
                "name" => "required|string",
                "description" => "required|string",
                "delivery_fee" => "nullable|sometimes|numeric",
                "delivery_range" => "nullable|sometimes|numeric",
                "phone" => "required|numeric",
                "email" => "required|email|unique:vendors,email," . $this->selectedModel->id . "",
                "address" => "required|string",
            ]
        );

        try {

            DB::beginTransaction();
            $model = $this->selectedModel;
            $model->name = $this->name;
            $model->description = $this->description;
            $model->base_delivery_fee = $this->base_delivery_fee ?? 0;
            $model->delivery_fee = $this->delivery_fee;
            $model->phone = $this->phone;
            $model->email = $this->email;
            $model->address = $this->address;
            $model->is_active = $this->isActive;
           
            $model->vendor_type_id = $this->vendor_type_id;
      
            $model->save();

        

            DB::commit();

            $this->dismissModal();
            $this->reset();
            $this->showSuccessAlert(__("Vendor") . " " . __('updated successfully!'));
            $this->emit('refreshTable');
        } catch (Exception $error) {
            DB::rollback();
            $this->showErrorAlert($error->getMessage() ?? __("Vendor") . " " . __('updated failed!'));
        }
    }

}
