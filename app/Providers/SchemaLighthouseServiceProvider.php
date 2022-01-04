<?php

namespace App\Providers;

use Illuminate\Http\Client\Request;
use Illuminate\Support\ServiceProvider;
use Nuwave\Lighthouse\Schema\Source\SchemaSourceProvider;
use Nuwave\Lighthouse\Schema\Source\SchemaStitcher;

class SchemaLighthouseServiceProvider extends ServiceProvider
{
    /**
     * Register multiply schema services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(SchemaSourceProvider::class, function (): SchemaStitcher {

            if (isset($_GET['key']) && $_GET['key'] === 'adminPanel') {
                return new SchemaStitcher(
                    config('lighthouse.schema.api_admin', '')
                );

            } else {
                return new SchemaStitcher(
                    config('lighthouse.schema.register', '')
                );

            }

        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
