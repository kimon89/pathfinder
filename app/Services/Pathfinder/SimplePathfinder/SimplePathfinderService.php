<?php

namespace App\Services\Pathfinder\SimplePathfinder;

use App\Services\Pathfinder\PathfinderServiceInterface;
use App\Services\GraphGenerator\GraphGeneratorInterface;
use App\Gateways\Repository\RepositoryGatewayInterface;
use App\Services\DataTransformer\DataTransformerInterface;
use App\Services\Pathfinder\SimplePathfinder\Algorithms\AlgorithmFactoryInterface;

/**
 * The main class that puts together different moduls to find the shortest path.
 */
class SimplePathfinderService implements PathfinderServiceInterface
{
    protected $graphGenerator;
    protected $repositoryGateway;
    protected $dataTransformer;
    protected $algorithmFactory;

    /**
     * All the required dependencies to find the path.
     *
     * @param GraphGeneratorInterface    $graphGenerator    [description]
     * @param RepositoryGatewayInterface $repositoryGateway [description]
     * @param DataTransformerInterface   $dataTransformer   [description]
     * @param AlgorithmFactoryInterface  $algorithmFactory  [description]
     */
    public function __construct(
        GraphGeneratorInterface $graphGenerator,
        RepositoryGatewayInterface $repositoryGateway,
        DataTransformerInterface $dataTransformer,
        AlgorithmFactoryInterface $algorithmFactory)
    {
        $this->graphGenerator = $graphGenerator;
        $this->repositoryGateway = $repositoryGateway;
        $this->dataTransformer = $dataTransformer;
        $this->algorithmFactory = $algorithmFactory;
    }

    /**
     * Set the algorithm factory.
     *
     * @param AlgorithmFactoryInterface $algorithmFactory [description]
     */
    public function setAlgorithmFactory(AlgorithmFactoryInterface $algorithmFactory)
    {
        $this->algorithmFactory = $algorithmFactory;
    }

    /**
     * Return the algorithm factory.
     *
     * @return AlgorithmFactoryInterface [description]
     */
    public function getAlgorithmFactory()
    {
        return $this->algorithmFactory;
    }

    /**
     * Returns a graph generator.
     *
     * @return GraphGeneratorInterface [description]
     */
    public function getGraphGenerator()
    {
        return $this->graphGenerator;
    }

    /**
     * Sets the graph generator.
     *
     * @param GraphGeneratorInterface $graphGenerator [description]
     */
    public function setGraphGenerator(GraphGeneratorInterface $graphGenerator)
    {
        $this->graphGenerator = $graphGenerator;

        return $this;
    }

    /**
     * Returns the repository gateway.
     *
     * @return RepositoryGatewayInterface [description]
     */
    public function getRepositoryGateway()
    {
        return $this->repositoryGateway;
    }

    /**
     * Set the repository gateway.
     *
     * @param RepositoryGatewayInterface $repositoryGateway [description]
     */
    public function setRepositoryGateway(RepositoryGatewayInterface $repositoryGateway)
    {
        $this->repositoryGateway = $repositoryGateway;

        return $this;
    }

    /**
     * Returns the data transformer.
     *
     * @return DataTransformerInterface [description]
     */
    public function getDataTransformer()
    {
        return $this->dataTransformer;
    }

    /**
     * Sets the data transformer.
     *
     * @param DataTransformerInterface $dataTransformer [description]
     */
    public function setDataTransformer(DataTransformerInterface $dataTransformer)
    {
        $this->dataTransformer = $dataTransformer;

        return $this;
    }

    /**
     * Get the shortest path between origin and destination.
     *
     * @param int $origin      [description]
     * @param int $destination [description]
     *
     * @return Path PathModel
     */
    public function getShortestPath($origin, $destination)
    {
        //retrieve the data and create a graph
        $data = $this->repositoryGateway->getAllRepositories();
        $transformedData = $this->dataTransformer->transformData($data);
        $graph = $this->graphGenerator->generateGraph($transformedData);

        //pass the graph to the algorithm to find the shortest path
        $algorithm = $this->algorithmFactory->getAlgorithm('bfs', $graph, $origin, $destination);
        $path = $algorithm->findPath();

        return [
            'hops' => $path->getHops(),
            'pathStr' => (string) $path,
            'pathData' => $path->getPath(),
        ];
    }
}
