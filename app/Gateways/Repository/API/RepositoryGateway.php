<?php

namespace App\Gateways\API;

use App\Models\User;
use App\Gateways\Repository\RepositoryGatewayInterface;

class RepositoryGateway implements RepositoryGatewayInterface
{
    /**
     * Get repositories by user id from github.
     *
     * @param [type] $userId [description]
     *
     * @return [type] [description]
     */
    public function getRepositoriesContributedByUserId($userId)
    {
        //TODO: implement github api logic
        return [];
    }

    /**
     * Get all repositories from github.
     *
     * @return [type] [description]
     */
    public function getAllRepositories()
    {
        //TODO: implement github api logic
        return [];
    }
}
