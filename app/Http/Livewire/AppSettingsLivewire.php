<?php

namespace App\Http\Livewire;

use Exception;
use LVR\Colour\Hex;

class AppSettingsLivewire extends BaseLivewireComponent
{

    // App settings
    public $appName;
    public $enableOTP;
    public $otpGateway;
    public $appCountryCode;
    public $enableGoogleDistance;
    public $enableSingleVendor;
    public $enableGroceryMode;
    public $enableReferSystem;
    public $enableChat;
    public $enableParcelVendorByLocation;
    public $webviewDirection;
    public $referRewardAmount;
    public $enableParcelMultipleStops;
    public $maxParcelStops;
    //
    public $what3wordsApiKey;
    //colors
    public $accentColor;
    public $primaryColor;
    public $primaryColorDark;
    public $onboarding1Color;
    public $onboarding2Color;
    public $onboarding3Color;
    //
    public $onboardingIndicatorDotColor;
    public $onboardingIndicatorActiveDotColor;
    public $openColor;
    public $closeColor;
    public $deliveryColor;
    public $pickupColor;
    public $ratingColor;
    public $pendingColor;
    public $preparingColor;
    public $enrouteColor;
    public $failedColor;
    public $cancelledColor;
    public $deliveredColor;
    public $successfulColor;


    // driver releated
    public $enableProofOfDelivery;
    public $enableDriverWallet;
    public $alertDuration;
    public $driverWalletRequired;
    public $vendorEarningEnabled;
    public $driverSearchRadius;
    public $enableOrderTracking;
    public $maxDriverOrderAtOnce;
    public $maxDriverOrderNotificationAtOnce;
    public $clearRejectedAutoAssignment;
    public $smsGateways = ['None','Firebase','Twilio'];


    public function mount()
    {
        
        $this->appName = setting('appName', env('APP_NAME'));
        $this->enableOTP = (bool) setting('enableOTP');
        $this->otpGateway = setting('otpGateway');
        $this->appCountryCode = setting('appCountryCode', 'GH');
        $this->enableGoogleDistance = (bool) setting('enableGoogleDistance', 1);
        $this->enableSingleVendor = (bool) setting('enableSingleVendor');
        $this->enableProofOfDelivery = (bool) setting('enableProofOfDelivery');
        $this->enableDriverWallet = (bool) setting('enableDriverWallet');
        $this->driverWalletRequired = (bool) setting('driverWalletRequired');
        $this->vendorEarningEnabled = (bool) setting('vendorEarningEnabled');

        $this->alertDuration = (int) setting('alertDuration', 15);
        $this->enableGroceryMode = (bool) setting('enableGroceryMode');
        $this->enableReferSystem = (bool) setting('enableReferSystem');
        $this->enableChat = (bool) setting('enableChat');
        $this->enableOrderTracking = (bool) setting('enableOrderTracking', true);
        $this->enableParcelVendorByLocation = (bool) setting('enableParcelVendorByLocation');
        $this->webviewDirection = setting('webviewDirection','ltr');
        $this->referRewardAmount = (double) setting('referRewardAmount');
        $this->enableParcelMultipleStops = (bool) setting('enableParcelMultipleStops');
        $this->maxParcelStops = (double) setting('maxParcelStops');
        $this->what3wordsApiKey = setting('what3wordsApiKey');

        //
        $this->driverSearchRadius = (double) setting('driverSearchRadius', 10);
        $this->maxDriverOrderAtOnce = (int) setting('maxDriverOrderAtOnce', 1);
        $this->maxDriverOrderNotificationAtOnce = (int) setting('maxDriverOrderNotificationAtOnce', 1);
        $this->clearRejectedAutoAssignment = (int) setting('clearRejectedAutoAssignment', 0);

        //
        $this->accentColor = setting('appColorTheme.accentColor', '#64bda1');
        $this->primaryColor = setting('appColorTheme.primaryColor', '#21a179');
        $this->primaryColorDark = setting('appColorTheme.primaryColorDark', '#146149');
        //
        $this->onboarding1Color = setting('appColorTheme.onboarding1Color', '#F9F9F9');
        $this->onboarding2Color = setting('appColorTheme.onboarding2Color', '#F6EFEE');
        $this->onboarding3Color = setting('appColorTheme.onboarding3Color', '#FFFBFC');
        //
        $this->onboardingIndicatorDotColor = setting('appColorTheme.onboardingIndicatorDotColor', '#30C0D9');
        $this->onboardingIndicatorActiveDotColor = setting('appColorTheme.onboardingIndicatorActiveDotColor', '#21a179');
        $this->openColor = setting('appColorTheme.openColor', '#00FF00');
        $this->closeColor = setting('appColorTheme.closeColor', '#FF0000');
        $this->deliveryColor = setting('appColorTheme.deliveryColor', '#FFBF00');
        $this->pickupColor = setting('appColorTheme.pickupColor', '#0000FF');
        $this->ratingColor = setting('appColorTheme.ratingColor', '#FFBF00');
        //
        $this->pendingColor = setting('appColorTheme.pendingColor', '#0099FF');
        $this->preparingColor = setting('appColorTheme.preparingColor', '#0000FF');
        $this->enrouteColor = setting('appColorTheme.enrouteColor', '#00FF00');
        $this->failedColor = setting('appColorTheme.failedColor', '#FF0000');
        $this->cancelledColor = setting('appColorTheme.cancelledColor', '#808080');
        $this->deliveredColor = setting('appColorTheme.deliveredColor', '#01A368');
        $this->successfulColor = setting('appColorTheme.successfulColor', '#01A368');
        
    }

    public function render()
    {

        $this->mount();
        return view('livewire.settings.app-settings');
    }


    public function saveAppSettings()
    {

        $this->validate([
            "appName" => "required|string",
            'accentColor' => ['sometimes','nullable', new Hex],
            'primaryColor' => ['sometimes','nullable', new Hex],
            'primaryColorDark' => ['sometimes','nullable', new Hex],
        ]);

        try {

            $appSettings = [
                'appName' =>  $this->appName,
                'otpGateway' =>  $this->otpGateway,
                'appCountryCode' =>  $this->appCountryCode,
                'enableGoogleDistance' =>  $this->enableGoogleDistance,
                'enableSingleVendor' =>  $this->enableSingleVendor,
                'enableProofOfDelivery' =>  $this->enableProofOfDelivery,
                'enableDriverWallet' =>  $this->enableDriverWallet,
                'driverWalletRequired' =>  $this->driverWalletRequired,
                'vendorEarningEnabled' =>  $this->vendorEarningEnabled,
                //default 15seconds
                'alertDuration' =>  $this->alertDuration ?? 15,
                //default 10km radius
                'driverSearchRadius' =>  $this->driverSearchRadius ?? 10,
                //max driver order at once
                'maxDriverOrderAtOnce' =>  $this->maxDriverOrderAtOnce ?? 1,
                'maxDriverOrderNotificationAtOnce' =>  $this->maxDriverOrderNotificationAtOnce ?? 1,
                'clearRejectedAutoAssignment' =>  $this->clearRejectedAutoAssignment ?? 0,
                'enableGroceryMode' =>  $this->enableGroceryMode,
                'enableReferSystem' =>  $this->enableReferSystem,
                'enableChat' =>  $this->enableChat,
                'enableOrderTracking' =>  $this->enableOrderTracking,
                'enableParcelVendorByLocation' =>  $this->enableParcelVendorByLocation,
                'webviewDirection' =>  $this->webviewDirection,
                'referRewardAmount' =>  $this->referRewardAmount,
                'referRewardAmount' =>  $this->referRewardAmount,
                'enableParcelMultipleStops' =>  $this->enableParcelMultipleStops,
                'maxParcelStops' =>  $this->maxParcelStops,
                'what3wordsApiKey' =>  $this->what3wordsApiKey,
                'appColorTheme' => [
                    "accentColor" => $this->accentColor,
                    "primaryColor" => $this->primaryColor,
                    "primaryColorDark" => $this->primaryColorDark,
                    //
                    "onboarding1Color" => $this->onboarding1Color,
                    "onboarding2Color" => $this->onboarding2Color,
                    "onboarding3Color" => $this->onboarding3Color,
                    //
                    "onboardingIndicatorDotColor" => $this->onboardingIndicatorDotColor,
                    "onboardingIndicatorActiveDotColor" => $this->onboardingIndicatorActiveDotColor,
                    "openColor" => $this->openColor,
                    "closeColor" => $this->closeColor,
                    "deliveryColor" => $this->deliveryColor,
                    "pickupColor" => $this->pickupColor,
                    "ratingColor" => $this->ratingColor,
                    "pendingColor" => $this->pendingColor,
                    "preparingColor" => $this->preparingColor,
                    "enrouteColor" => $this->enrouteColor,
                    "failedColor" => $this->failedColor,
                    "cancelledColor" => $this->cancelledColor,
                    "deliveredColor" => $this->deliveredColor,
                    "successfulColor" => $this->successfulColor,
                ]
            ];

            // update the site name
            setting($appSettings)->save();



            $this->showSuccessAlert(__("App Settings saved successfully!"));
            $this->reset();
        } catch (Exception $error) {
            $this->showErrorAlert($error->getMessage() ?? __("App Settings save failed!"));
        }
    }
}
