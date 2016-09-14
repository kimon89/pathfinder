<?php

namespace App\Providers;

use App\Services\Pathfinder\SimplePathfinder\Algorithms\AlgorithmFactoryInterface;
use App\Services\Pathfinder\SimplePathfinder\Algorithms\AlgorithmFactory;
use Illuminate\Support\ServiceProvider;

class AlgorithmFactoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(AlgorithmFactoryInterface::class, function ($app) {
            return new AlgorithmFactory();
        });
    }
}
