<?php

namespace App\Gateways\Repository;

/**
 * Data access layer for repositories.
 */
interface RepositoryGatewayInterface
{
    /**
     * Returns repositories the user has contributed to.
     *
     * @param int $userId The id of the user
     *
     * @return array
     */
    public function getRepositoriesContributedByUserId($userId);

    /**
     * Returns all the users and their repositories.
     *
     * @return array
     */
    public function getAllRepositories();
}
