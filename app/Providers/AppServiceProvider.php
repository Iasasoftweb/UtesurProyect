<?php

namespace App\Providers;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Carbon\Carbon;

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
       Carbon::setLocale('es');
       setlocale(LC_TIME, 'es_ES');
       Carbon::setUtf8(true);
       Paginator::useBootstrap();

       Blade::directive('nl2br', function ($string) {
        return "<?php echo nl2br($string); ?>"; }); 

       
       
    }

       
}

