<?php

namespace App\Services\Pathfinder\SimplePathfinder\Algorithms;

interface AlgorithmFactoryInterface
{
    public function getAlgorithm($algorithm, $graph, $origin, $destination);
}
