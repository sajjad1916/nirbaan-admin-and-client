<?php

use App\Http\Livewire\Auth\Userlogin;
use App\Http\Livewire\Auth\UserRegistration;

use App\Http\Livewire\Auth\LoginLivewire;
use App\Http\Livewire\Auth\RegisterLivewire;
use App\Http\Livewire\Auth\PasswordResetLivewire;
use App\Http\Livewire\Auth\ForgotPasswordLivewire;

use App\Http\Livewire\DashboardLivewire;
use App\Http\Livewire\VendorTypeLivewire;
use App\Http\Livewire\VendorLivewire;
// use App\Http\Livewire\ReviewLivewire;
// use App\Http\Livewire\WalletTransactionLivewire;


use App\Http\Livewire\OrderLivewire;
use App\Http\Livewire\CouponLivewire;
use App\Http\Livewire\CouponReportLivewire;


use App\Http\Livewire\CurrencyLivewire;
use App\Http\Livewire\AppSettingsLivewire;
use App\Http\Livewire\WebsiteSettingsLivewire;
use App\Http\Livewire\ServerSettingsLivewire;
use App\Http\Livewire\SettingsLivewire;
use App\Http\Livewire\PaymentMethodivewire;
use App\Http\Livewire\Payment\OrderPaymentLivewire;
use App\Http\Livewire\Payment\OrderPaymentCallbackLivewire;

use App\Http\Livewire\PackageTypeLivewire;
use App\Http\Livewire\PackageTypePricingLivewire;

use App\Http\Livewire\UserLivewire;
use App\Http\Livewire\DriverLivewire;


use App\Http\Livewire\NotificationLivewire;
use App\Http\Livewire\SMSGatewayLivewire;
use App\Http\Livewire\CronJobLivewire;

use App\Http\Livewire\ProfileLivewire;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\UserOrder;


use App\Http\Livewire\Home;


Route::group(['middleware' => ['web']], function () {

    Route::get('/',Home::class)->name('home')->middleware('guest');
    
    // User Auth   
    Route::get('user/login', Userlogin::class)->name('userlogin')->middleware('guest');
    Route::get('user/registration',UserRegistration::class)->name('userRegistration')->middleware('guest');
    // Auth
    Route::get('login', LoginLivewire::class)->name('login');
    Route::get('register', RegisterLivewire::class)->name('register');
    Route::get('logout', function () {
        Auth::logout();
        return redirect()->route('userlogin');
    })->name('logout');

    Route::get('password/forgot', ForgotPasswordLivewire::class)->name('password.forgot');
    Route::get('password/update/{code}/{email}', PasswordResetLivewire::class)->name('password.reset.link');


    // Pages
    Route::get('privacy/policy', function () {
        return view('layouts.pages.privacy');
    })->name('privacy');

    Route::get('pages/contact', function () {
        return view('layouts.pages.contact');
    })->name('contact');

    Route::get('pages/terms', function () {
        return view('layouts.pages.terms');
    })->name('terms');

    // AUth routes
    Route::group(['middleware' => ['auth']], function () {

        //
        Route::get('profile', ProfileLivewire::class)->name('profile');
        Route::get('dashboard', DashboardLivewire::class)->name('dashboard');
       
        Route::get('new/order', UserOrder::class)->name('newOrder');
       
        Route::get('order/orders', OrderLivewire::class)->name('orders');
        Route::get('coupons', CouponLivewire::class)->name('coupons');
        Route::get('coupons/report', CouponReportLivewire::class)->name('coupons.report');

        Route::get('vendor/types', VendorTypeLivewire::class)->name('vendor.types');
        Route::get('vendors', VendorLivewire::class)->name('vendors');

        //admin/manager routes
    


        //admin routes
        Route::group(['middleware' => ['role:admin']], function () {

            //
            Route::get('operations/cron/job', CronJobLivewire::class)->name('configure.cron.job');
            // Route::get('reviews', ReviewLivewire::class)->name('reviews');
            
            
            Route::get('setting/settings', SettingsLivewire::class)->name('settings');
            Route::get('setting/app/settings', AppSettingsLivewire::class)->name('settings.app');
            Route::get('setting/website/settings', WebsiteSettingsLivewire::class)->name('settings.website');
            Route::get('setting/app/server', ServerSettingsLivewire::class)->name('settings.server');
            Route::get('setting/payment/methods', PaymentMethodivewire::class)->name('payment.methods');
            Route::get('notification/send', NotificationLivewire::class)->name('notification.send');
            
            //package
            Route::get('package/types', PackageTypeLivewire::class)->name('package.types');
            
            
           

            //settings
            Route::get('setting/sms/gateways', SMSGatewayLivewire::class)->name('sms.settings');
             });
        
        Route::group(['middleware' => ['role:admin']], function () {
            
            Route::get('users', UserLivewire::class)->name('users');
            
        });

        //manager routes
        Route::group(['middleware' => ['role:admin']], function () {

            Route::get('package/pricing', PackageTypePricingLivewire::class)->name('package.pricing');
            Route::get('drivers', DriverLivewire::class)->name('drivers');
            
        });
      
    });

    //Unauth routes
    Route::get('order/payment', OrderPaymentLivewire::class)->name('order.payment');
    Route::get('order/payment/callback', OrderPaymentCallbackLivewire::class)->name('payment.callback');
    
});



