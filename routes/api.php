<?php

use App\Http\Controllers\API\AppSettingsController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\VendorTypeController;
use App\Http\Controllers\API\CouponController;
use App\Http\Controllers\API\PaymentMethodController;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\API\TrackOrderController;
use App\Http\Controllers\API\PackageOrderController;
use App\Http\Controllers\API\PackageTypeController;
use App\Http\Controllers\API\ChatNotificationController;


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//CRON Job
Route::get('/cron/job', function (Request $request) {
    //
    $appKey  = env("CRON_JOB_KEY", "");
    $urlAppKey = str_ireplace(" ", "+", $request->key);
    //
    if($appKey != $urlAppKey){
        return response()->json([
            "message" => "Unauthorized",
        ],401);
    }

    $artisan = \Artisan::call("schedule:run");
    $output = \Artisan::output();
    return response()->json([
        "message" => "schedule runed",
        "output" => $output
    ]);
})->name('cron.job');

//App settings
Route::get('/app/settings', [AppSettingsController::class, 'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Auth
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::get('logout', [AuthController::class, 'logout']);

Route::get('verify/phone', [AuthController::class, 'verifyPhoneAccount']);
Route::post('password/reset/init', [AuthController::class, 'passwordReset']);



Route::apiResource('vendor/types', VendorTypeController::class);
Route::get('coupons/{code}', [CouponController::class, 'show']);

//package delivery
Route::get('package/types', [PackageTypeController::class, 'index']);
//
Route::post('order/payment/callback', [OrderPaymentCallbackController::class, 'order'])->name('api.payment.callback');
Route::get('/delivery',[OrderController::class,'deliveryZone']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::put('profile/update', [AuthController::class, 'profileUpdate']);
    Route::put('profile/password/update', [AuthController::class, 'changePassword']);
    Route::apiResource('payment/methods', PaymentMethodController::class)->only('index');
    Route::apiResource('orders', OrderController::class)->only('index', 'store', 'show', 'update');
    Route::post('/track/order', [TrackOrderController::class,"track"]);
    //package delivery
    Route::get('package/order/summary', [PackageOrderController::class, 'summary']);
    Route::get('/order/{status}',[OrderController::class,'OrderStatus']);
    Route::get('/orderss/{status}',[OrderController::class,'OrderStatuses']);
    Route::get('/orderss/code/{code}',[OrderController::class,'OrderCode']);
    //
    Route::post('chat/notification', [ChatNotificationController::class, 'send']);
});
