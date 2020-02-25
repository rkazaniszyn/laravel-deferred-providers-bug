<?php

namespace App\Providers;

use App\SampleImplementation;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class SampleImplementationProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SampleImplementation::class, function() {
            return new SampleImplementation('config variable');
        });
    }
    public function provides()
    {
        return [SampleImplementation::class];
    }
}
