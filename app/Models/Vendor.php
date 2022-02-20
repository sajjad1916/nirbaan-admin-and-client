<?php

namespace App\Models;

use Malhal\Geographical\Geographical;
use Illuminate\Support\Facades\Auth;
use willvincent\Rateable\Rateable;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Schema;
use Kirschbaum\PowerJoins\PowerJoins;

class Vendor extends BaseModel
{

    use  Geographical, Rateable, PowerJoins;
    protected static $kilometers = true;
    protected $casts = [
        'id' => 'integer', 
        'allow_schedule_order' => 'boolean', 
        'has_sub_categories' => 'boolean', 
        'has_subscription' => 'boolean',
        'use_subscription' => 'boolean'
    ];
    protected $appends = ['formatted_date', 'logo', 'feature_image', 'can_rate', 'is_open', 'slots', 'is_package_vendor', 'has_subscription'];
    protected $with = ['vendor_type'];

    protected $fillable = [
        "id", "name", "description", "delivery_fee", "delivery_range", "tax", "phone", "email", "address", "latitude", "longitude", "commission", "pickup", "delivery", "is_active", "charge_per_km", "is_open", "vendor_type_id"
    ];

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('logo')
            ->useFallbackUrl('' . url('') . '/images/default.png')
            ->useFallbackPath(public_path('/images/default.png'));
        $this
            ->addMediaCollection('feature_image')
            ->useFallbackUrl('' . url('') . '/images/default.png')
            ->useFallbackPath(public_path('/images/default.png'));
    }

    public function scopeIsPackageDelivery($query)
    {
        return $query->where('is_package_vendor', 1);
    }

    public function scopeRegularVendor($query)
    {
        return $query->where('is_package_vendor', 0);
    }

    public function scopeMine($query)
    {

        return $query->when(Auth::user()->hasRole('manager'), function ($query) {
            return $query->where('id', Auth::user()->vendor_id);
        })->when(Auth::user()->hasRole('city-admin'), function ($query) {
            return $query->where('creator_id', Auth::id());
        });
    }

    public function getLogoAttribute()
    {
        return $this->getFirstMediaUrl('logo');
    }
    public function getFeatureImageAttribute()
    {
        return $this->getFirstMediaUrl('feature_image');
    }


    public function getRatingAttribute()
    {
        return  (int) ($this->averageRating ?? setting("defaultVendorRating", 3));
    }


    public function getIsPackageVendorAttribute($value)
    {

        // is_package_vendor
        if (Schema::hasColumn('vendors', 'is_package_vendor')) {
            return $value;
        } else {
            $type = $this->vendor_type;
            if ($type->slug ?? '' == "parcel") {
                return 1;
            } else {
                return 0;
            }
        }
    }



    //RELATIONSHIPS
    public function vendor_type()
    {
        return $this->belongsTo('App\Models\VendorType', 'vendor_type_id', 'id');
    }



    public function managers()
    {
        return $this->hasMany('App\Models\User', 'vendor_id', 'id');
    }

    public function sales()
    {
        return $this->hasMany('App\Models\Order', 'vendor_id', 'id');
    }



    public function payment_methods()
    {
        return $this->belongsToMany('App\Models\PaymentMethod');
    }



    public function package_types_pricing()
    {
        return $this->hasMany('App\Models\PackageTypePricing', 'vendor_id', 'id');
    }


    public function getCanRateAttribute()
    {

        if (empty(Auth::user())) {
            return false;
        }
        //
    }

    public function getCanRateDriverAttribute()
    {

        if (empty(Auth::user())) {
            return false;
        }
        //
    }

}
