<?php

namespace App\Services\Pathfinder\SimplePathfinder\Algorithms\Implementations;

use App\Services\Pathfinder\SimplePathfinder\Algorithms\AlgorithmInterface;
use App\Exceptions\PathNotFoundException;
use App\Exceptions\NodeDoesNotExistException;
use App\Models\Path;

class BFSAlgorithm implements AlgorithmInterface
{
    protected $graph;

    public function __construct(\SplQueue $queue, $graph, $origin, $destination)
    {
        $this->queue = $queue;
        $this->graph = $graph;
        $this->origin = $origin;
        $this->destination = $destination;
    }

    /**
     * Set origin.
     *
     * @param [type] $origin [description]
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
    }

    /**
     * Get origin.
     *
     * @return [type] [description]
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Set destination.
     *
     * @param [type] $destination [description]
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
    }

    /**
     * Destination.
     *
     * @return [type] [description]
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set the graph data.
     *
     * @param array $graph [description]
     */
    public function setGraph(array $graph)
    {
        $this->graph = $graph;

        return $this;
    }

    /**
     * Returns the graph.
     *
     * @return array [description]
     */
    public function getGraph()
    {
        return $this->graph;
    }

    /**
     * [findPath description].
     *
     * @return Path [description]
     */
    public function findPath()
    {
        $this->validateNodes();

        $queue = new \SplQueue();
        $queue->push($this->origin);
        $visited[$this->origin] = true;
        $pathHistory = [];

        $pathHistory[$this->origin] = [$this->origin];
        while (!$queue->isEmpty()) {
            $current = $queue->shift();
            foreach ($this->graph[$current] as $key => $value) {
                if ($this->destination != $value) {
                    if (!isset($visited[$value])) {
                        $visited[$value] = true;
                        $queue->push($value);
                        $pathHistory[$value] = $pathHistory[$current];
                        $pathHistory[$value][] = $value;
                    }
                } else {
                    $pathHistory[$value] = $pathHistory[$current];
                    $pathHistory[$value][] = $value;
                    break 2;
                }
            }
        }

        if (!isset($pathHistory[$this->destination])) {
            throw new PathNotFoundException("origin: {$this->origin}, destination: {$this->destination}");
        }

        return new Path($pathHistory[$this->destination]);
    }

    /**
     * Validate that the nodes exist in the graph.
     *
     * @return [type] [description]
     */
    public function validateNodes()
    {
        if (!isset($this->graph[$this->origin])) {
            throw new NodeDoesNotExistException($this->origin);
        }

        if (!isset($this->graph[$this->destination])) {
            throw new NodeDoesNotExistException($this->destination);
        }
    }
}
