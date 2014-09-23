<?php namespace Project\Names;

use Illuminate\Support\ServiceProvider;

class NameServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->bind(
			'name',
			'Project\Names\Factory'
		);
	}

}