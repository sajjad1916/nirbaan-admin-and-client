<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Sanctum\HasApiTokens;
use willvincent\Rateable\Rateable;

class User extends Authenticatable implements HasMedia
{
    use HasFactory, Notifiable, InteractsWithMedia, HasRoles, HasApiTokens, Rateable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'country_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'role_name',
        'role_id',
        'formatted_date',
        'photo',
        
    ];

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('profile')
            ->useFallbackUrl('' . url('') . '/images/user.png')
            ->useFallbackPath(public_path('/images/user.png'));
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }
    
    public function getPhotoAttribute()
    {
        return $this->getFirstMediaUrl('profile');
    }

    public function getRoleNameAttribute()
    {
        return $this->roles->first()->name ?? "";
    }

    public function getRoleIdAttribute()
    {
        return $this->roles->first()->id ?? "";
    }

    public function getFormattedDateAttribute()
    {
        return $this->created_at->format('d M Y');
    }

    public function getRatingAttribute()
    {
        return  (int) ($this->averageRating ?? 3);
    }

    public function getAssignedOrdersAttribute()
    {
        return  Order::where("driver_id", $this->id)->otherCurrentStatus(['failed', 'cancelled', 'delivered'])->count() ?? 0;
    }

    public function scopeManager($query)
    {
        return $query->role('manager');
    }

    public function scopeAdmin($query)
    {
        return $query->role('admin');
    }

    public function scopeClient($query)
    {
        return $query->role('client');
    }




    //
    public function creator()
    {
        return $this->belongsTo('App\Models\User', 'creator_id', 'id');
    }

    public function vendor()
    {
        return $this->belongsTo('App\Models\Vendor', 'vendor_id', 'id');
    }

    //vendors
    public function vendors()
    {
        return $this->hasMany('App\Models\Vendor', 'creator_id', 'id');
    }



    //NOTIFICATION
    function syncFCMToken($token)
    {

        try {
            if (!empty($token)) {
                $userToken = UserToken::create([
                    "user_id" => \Auth::id(),
                    "token" => $token
                ]);
            }
        } catch (\Exception $ex) {
            \Log::debug([
                "Error" => $ex->getMessage()
            ]);
        }
    }

    //NOTIFICATION
    function clearFCMToken()
    {
        UserToken::where("user_id", \Auth::id())->delete();
    }


    
}
