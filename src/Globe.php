<?php

namespace CoreDev\LaravelGlobeLabs;

use Illuminate\Support\Facades\Facade;

class Globe extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'globe';
	}
}