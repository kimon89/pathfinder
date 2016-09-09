<?php
namespace App\Services\GraphGenerator;

use App\Services\GraphGenerator\GraphGeneratorInterface;

/**
 * Graph generator from data
 */
class AdjacencyList implements GraphGeneratorInterface
{
	/**
	 * Create a graph out of given data
	 * @param  array  $data Input data
	 * @return array       An array representing a graph
	 */
	public function generateGraph(array $data)
	{
		$graph = [];
		foreach ($data as $keyA => $value) {
			foreach ($value as $val) {
				foreach ($data as $keyB => $va) {
					if ($keyB == $keyA) {
						continue;
					}
					if (in_array($val, $va)) {
						$graph[$keyA][] = $keyB;
					}
				}
			}
		}
		return $graph;
	}
}