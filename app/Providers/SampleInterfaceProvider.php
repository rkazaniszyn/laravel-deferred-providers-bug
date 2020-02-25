<?php

namespace App\Providers;

use App\SampleImplementation;
use App\SampleInterface;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class SampleInterfaceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SampleInterface::class, SampleImplementation::class);
    }
    public function provides()
    {
        return [SampleInterface::class];
    }
}
