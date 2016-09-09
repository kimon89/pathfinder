<?php
namespace App\Services\Pathfinder\Strategies;

class BreadthFirstSearchStrategy implements PathfinderStrategyInterface
{
	protected $graph;

	public function setGraph(array $graph)
	{
		$this->graph = $graph;
		return $this;
	}

	public function getGraph()
	{
		return $this->graph;
	}

	/**
	 * [findPath description]
	 * @param  [type] $origin      [description]
	 * @param  [type] $destination [description]
	 * @return [type]              [description]
	 */
	public function findPath($origin, $destination) 
	{

	}
}