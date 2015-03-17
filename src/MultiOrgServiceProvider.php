<?php namespace DemocracyApps\MultiOrg;

/*
* This file is part of the DemocracyApps\multi-org package.
*
* Copyright DemocracyApps, Inc.
*
* See the LICENSE.txt file distributed with this source code for full copyright and license information.
*
*/

use DemocracyApps\MultiOrg\MultiOrgManager;
use Illuminate\Support\ServiceProvider;

class MultiOrgServiceProvider extends ServiceProvider
{

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // No bindings
    }
    
        /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/multi-org.php' => config_path('multi-org.php')
        ]);

    }
}