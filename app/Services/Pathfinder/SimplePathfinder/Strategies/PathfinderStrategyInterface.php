<?php
namespace App\Services\Pathfinder\SimplePathfinder\Strategies;

/**
 * Find the path between two nodes
 */
interface PathfinderStrategyInterface
{
	/**
	 * Calculates the shortest path between two nodes
	 * @param  [type] $origin      [description]
	 * @param  [type] $destination [description]
	 * @return [type]              [description]
	 */
	public function findPath($origin, $destination, $graph);
}