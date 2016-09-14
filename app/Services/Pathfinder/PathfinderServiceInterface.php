<?php

namespace App\Services\Pathfinder;

interface PathfinderServiceInterface
{
    /**
     * Returns the shortest path between two nodes.
     *
     * @param int $origin      Origin node
     * @param int $destination destination node
     *
     * @return array Array containing the path
     */
    public function getShortestPath($origin, $destination);
}
