<?php

namespace Devaissamail\Mail;

use Illuminate\Support\ServiceProvider;

class MailServiceProvider extends ServiceProvider {

    public function boot(){

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        $this->loadViewsFrom(__DIR__.'/views','mail');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->mergeConfigFrom(__DIR__.'/config/mail_config.php','mail_config');

        // to cpy the mail_config inside your main project
        $this->publishes([
            __DIR__.'/config/mail_config.php' => config_path('mail_config.php'),
        ]);
    }


    public function register()
    {
        
    }


}