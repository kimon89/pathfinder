<?php

namespace App\Providers;

use App\Services\DataTransformerInterface;
use App\Services\DatabaseTransformer;

use Illuminate\Support\ServiceProvider;

class DataTransformerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(DataTranformerInterface::class, function ($app) {
            return new DatabaseTransformer();
        });
    }
}
