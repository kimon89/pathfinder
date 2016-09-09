<?php

namespace App\Providers;

use App\Services\GraphGenerator\GraphGeneratorInterface;
use App\Services\GraphGenerator\AdjacencyList;
use Illuminate\Support\ServiceProvider;

class GraphGeneratorServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(GraphGeneratorInterface::class, function ($app) {
            return new AdjacencyList();
        });
    }
}
