<?php namespace ShaunHare\Csp;

use Illuminate\Support\ServiceProvider;

class CspServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider and
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app->view->composer('*', 'ShaunHare\Csp\Composers\CspComposer');
	}

    /**
     *
     */
    public function boot()
    {

    }

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
