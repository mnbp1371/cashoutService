<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        Blade::directive('jdatetime', function ($date) {
            return "<?php echo \Morilog\Jalali\Jalalian::forge($date)->format('%A - %Y/m/d - H:i:s') ?>";
        });
    }
}
