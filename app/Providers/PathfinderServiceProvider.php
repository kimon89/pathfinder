<?php

namespace App\Providers;

use App\Services\Pathfinder\PathfinderServiceInterface;
use App\Services\Pathfinder\SimplePathfinder\SimplePathfinderService;
use App\Services\GraphGenerator\AdjacencyList;
use Illuminate\Support\ServiceProvider;
use App\Gateways\Repository\Database\RepositoryGateway;
use App\Services\DataTransformer\DatabaseTransformer;
use App\Models\User;
use App\Models\Repository;

class PathfinderServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(PathfinderServiceInterface::class, function ($app) {
            return new SimplePathfinderService(
            	new AdjacencyList(), 
            	new RepositoryGateway(new User(), new Repository()),
            	new DatabaseTransformer());
        });
    }
}
