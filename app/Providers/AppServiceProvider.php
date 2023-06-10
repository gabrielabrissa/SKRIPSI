<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        config(['app.locale' => 'id']);
        Carbon::setLocale('id');
        date_default_timezone_set('Asia/Jakarta');
        
        Carbon::serializeUsing(function ($carbon) {
            return $carbon->format('U');
        });
        
        Gate::define('admin', function(User $user){
            return $user ->ID_ROLEUSER == 2;
        });

        Gate::define('supplier', function(User $user){
            return $user ->ID_ROLEUSER == 1;
        });
    }
}
