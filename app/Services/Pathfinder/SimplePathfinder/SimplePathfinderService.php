<?php
namespace App\Services\Pathfinder\SimplePathfinder;

use App\Services\Pathfinder\PathfinderServiceInterface;
use App\Services\GraphGenerator\GraphGeneratorInterface;
use App\Gateways\Repository\RepositoryGatewayInterface;
use App\Services\DataTransformer\DataTransformerInterface;

class SimplePathfinderService implements PathfinderServiceInterface
{
	protected $graphGenerator;
	protected $repositoryGateway;
	protected $dataTransformer;

	public function __construct(
		GraphGeneratorInterface $graphGenerator,
		RepositoryGatewayInterface $repositoryGateway,
		DataTransformerInterface $dataTransformer,
		PathfinderStrategyInterface $strategy)
	{
		$this->graphGenerator = $graphGenerator;
		$this->repositoryGateway = $repositoryGateway;
		$this->dataTransformer = $dataTransformer;
		$this->strategy = $strategy;
	}

	public function setStrategy(PathfinderStrategyInterface $strategy)
	{
		$this->strategy = $strategy;
		return $this;
	}

	public function getStrategy()
	{
		return $this->strategy;
	}

	public function getGraphGenerator()
	{
		return $this->graphGenerator;
	}

	public function setGraphGenerator(GraphGeneratorInterface $graphGenerator)
	{
		$this->graphGenerator = $graphGenerator;
		return $this;
	}

	public function getRepositoryGateway()
	{
		return $this->repositoryGateway;
	}

	public function setRepositoryGateway(RepositoryGatewayInterface $repositoryGateway)
	{
		$this->repositoryGateway = $repositoryGateway;
		return $this;
	}

	public function getDataTransformer()
	{
		return $this->dataTransformer;
	}

	public function setDataTransformer(DataTransformerInterface $dataTransformer)
	{
		$this->dataTransformer = $dataTransformer;
		return $this;
	}
	
	public function getShortestPath($origin, $destination)
	{
		$data = $this->repositoryGateway->getAllRepositories();
		$transformedData = $this->dataTransformer->transformData($data);
		$graph = $this->graphGenerator->generateGraph($transformedData);
		$this->strategy->setGraph($graph);
		return $this->strategy->findPath($origin, $destination);
	}
}