<?php

namespace App\Providers;

use App\Billing\BankPaymentGateway;
use App\Billing\CreditPaymentGateway;
use App\Billing\PaymentGatewayContract;
use App\Http\View\Composers\ChannelComposer;
use App\Mixins\StrMixins;
use App\Services\PostcardSendingService;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // 1. Service container
        $this->app->singleton(PaymentGatewayContract::class, function ($app) {

            if (request()->has('credit')) {
                return new CreditPaymentGateway('usd');
            }

            return new BankPaymentGateway('usd');
        });

        // 4. Facades
        $this->app->singleton('Postcard', function ($app) {
            return new PostcardSendingService('us', 4, 6);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /** 2. View Composer **/
        // Option 1 - Every single view
//        View::share('channels', Channel::orderBy('name')->get());

        // Option 2 - one or many specified view (with wildcards)
//        View::composer(['post.*', 'channel.index'], function ($view) {
//            $view->with('channels', Channel::orderBy('name')->get());
//        });

        // Option 3 - Dedicated class of option 2
        View::composer('partials.channels.*', ChannelComposer::class);


        /** 5. Macros **/
        // Option 1 - Declare single macro at a time
        ResponseFactory::macro('errorJson', function ($message = 'Default error message') {
            return [
                'message' => $message,
                'error_code' => 123
            ];
        });

//        Str::macro('partNumber', function($part) {
//            return 'AB-' . substr($part, 0, 3) . '-' . substr($part, 3);
//        });

        // Option 2 - Declare multiple macro at a time using a class
        Str::mixin(new StrMixins());
    }
}
