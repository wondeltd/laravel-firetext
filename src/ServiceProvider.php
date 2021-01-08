<?php

namespace Razorcreations\FireText;

use FireText\Api\Client;
use FireText\Api\Credentials\ApiKey;
use FireText\Api\Credentials\Login;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
	/**
	 * Bootstrap any package services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes([
			__DIR__ . '/../config/firetext.php' => config_path('firetext.php'),
		]);
	}

	public function register() {
		$this->app->singleton(Api::class, function ($app) {
			$username = config('firetext.username');
			$password = config('firetext.password');
			$token = config('firetext.token');

			if (isset($token)) {
				return new Client(new ApiKey($token));
			}

			if (isset($username) && isset($password)) {
				return new Client(new Login($username, $password));
			}
			
			return new Client();
		});
	}
}
