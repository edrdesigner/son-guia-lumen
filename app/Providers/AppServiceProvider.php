<?php

namespace App\Providers;

namespace App\Restaurant;
namespace App\Observers\RestaurantObserver;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{	

	public function boot()
	{
		Restaurant::observe(RestaurantObserver::class);
	}

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
