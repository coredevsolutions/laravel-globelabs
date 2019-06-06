<?php

namespace CoreDev\LaravelGlobeLabs;

use GlobeApi;
use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class GlobeServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->singleton('globe', function() {
			$client = new Client([
				'base_uri' => 'https://devapi.globelabs.com.ph/smsmessaging/v1/'
			]);

			return new GlobeApi($client);
		});
	}
}