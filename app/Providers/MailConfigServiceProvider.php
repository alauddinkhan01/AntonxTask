<?php

namespace App\Providers;

use App\Models\Settings\EmailSettings;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class MailConfigServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        try {
            $emailServices =  app(EmailSettings::class);

            if ($emailServices) {
                $config = array(
                    'driver'     => $emailServices->mailer,
                    'host'       => $emailServices->host,
                    'port'       => $emailServices->port,
                    'username'   => $emailServices->username,
                    'password'   => $emailServices->password,
                    'encryption' => null,
                    'from'       => array('address' => $emailServices->from_address, 'name' => "File Transfer"),
                );

                Config::set('mail', $config);
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
