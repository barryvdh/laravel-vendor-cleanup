<?php
/**
 * Laravel Vendor Cleanup
 *
 * @author    Barry vd. Heuvel <barryvdh@gmail.com>
 * @copyright 2013 Barry vd. Heuvel / Fruitcake Studio (http://www.fruitcakestudio.nl)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      https://github.com/barryvdh/laravel-vendor-cleanup
 */

namespace Barryvdh\VendorCleanup;

use Illuminate\Support\ServiceProvider;

class VendorCleanupServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('barryvdh/laravel-vendor-cleanup');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app['command.vendor-cleanup'] = $this->app->share(function($app)
            {
                return new VendorCleanupCommand;
            });
        $this->commands('command.vendor-cleanup');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
        return array('command.vendor-cleanup');
	}

}