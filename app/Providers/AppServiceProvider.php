<?php

    namespace App\Providers;

    use Illuminate\Support\ServiceProvider;
    use Illuminate\Support\Facades\URL; // <-- NÃO ESQUEÇA DESTA LINHA

    class AppServiceProvider extends ServiceProvider
    {
        /**
         * Register any application services.
         */
        public function register(): void
        {
            //
        }

        /**
         * Bootstrap any application services.
         */
        public function boot(): void
        {
            // Força HTTPS se não estiver em ambiente local
            if (config('app.env') !== 'local') {
                URL::forceRootUrl(config('app.url'));
                URL::forceScheme('https');
            }
        }
    }
    
?>
