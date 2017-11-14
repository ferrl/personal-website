<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\HtmlString;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('inlineCss', function ($expression) {
            $path = $fileName= null;

            eval('$fileName = '.$expression.';');
            eval('$path = public_path("'.$fileName->toHtml().'");');

            $contents = file_get_contents($path);

            return "<?php echo '<style>".strip_tags($contents)."</style>'; ?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
