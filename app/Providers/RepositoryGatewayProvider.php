<?php

namespace App\Providers;

use App\Gateways\RepositoryGatewayInterface;
use App\Gateways\Database\RepositoryGateway;
use App\Models\User;
use App\Models\Repository;
use Illuminate\Support\ServiceProvider;

class RepositoryGatewayProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(RepositoryGatewayInterface::class, function ($app) {
            return new RepositoryGateway(new User(), new Repository());
        });
    }
}
