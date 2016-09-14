<?php

namespace App\Services\Pathfinder\SimplePathfinder\Algorithms;

use App\Services\Pathfinder\SimplePathfinder\Algorithms\Implementations\BFSAlgorithm;

/**
 * Constructs and prepares an algorithm to be used.
 */
class AlgorithmFactory implements AlgorithmFactoryInterface
{
    protected $availableAlrgorithms = [
        'bfs' => BFSAlgorithm::class,
    ];

    /**
     * Returns an algorithm based on the input.
     *
     * @param string $algorithm   [description]
     * @param array  $graph       [description]
     * @param int    $origin      [description]
     * @param int    $destination [description]
     *
     * @return AlgorithmInterface [description]
     */
    public function getAlgorithm($algorithm, $graph, $origin, $destination)
    {
        if (!isset($this->availableAlrgorithms[$algorithm])) {
            throw new AlgorithmNotFoundExcetion();
        }

        if ($algorithm == 'bfs') {
            return new BFSAlgorithm(new \SplQueue(), $graph, $origin, $destination);
        }
    }
}
