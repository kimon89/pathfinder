<?php
use PHPUnit\Framework\TestCase;

use App\Services\Pathfinder\SimplePathfinder\SimplePathfinderService;
use App\Services\GraphGenerator\AdjacencyList;
use App\Gateways\Repository\Database\RepositoryGateway;
use App\Services\DataTransformer\DatabaseTransformer;
use App\Services\Pathfinder\SimplePathfinder\Algorithms\AlgorithmFactory;
use App\Services\Pathfinder\SimplePathfinder\Algorithms\Implementations\BFSAlgorithm;
use App\Models\Path;


class SimplePathfinderServiceTest extends TestCase
{
	protected $pathFinderService;
	protected $graphGenerator;
	protected $dataTransformer;
	protected $algorithmFactory;
    protected $algorithm;
    protected $path;

    protected $repositoryData = [
        [
            'id' => 1,
            'name' => 'TestUser1',
            'repositories' => [
                [
                    'id' => 1,
                    'name' => 'TestRepo1'
                ],
                [
                    'id' => 2,
                    'name' => 'TestRepo2'
                ]
            ],
            'id' => 2,
            'name' => 'TestUser2',
            'repositories' => [
                [
                    'id' => 2,
                    'name' => 'TestRepo2'
                ],
                [
                    'id' => 6,
                    'name' => 'TestRepo6'
                ]
            ],
            'id' => 3,
            'name' => 'TestUser3',
            'repositories' => [
                [
                    'id' => 4,
                    'name' => 'TestRepo4'
                ],
                [
                    'id' => 6,
                    'name' => 'TestRepo6'
                ]
            ],

        ]
    ];

    protected $transformedData = [
        1 => [
            'repo1',
            'repo2',
        ],
        2 => [
            'repo2',
            'repo6'
        ],
        3 => [
            'repo4',
            'repo6',
        ]
    ];

    protected $graphData = [
        1 => [
            2
        ],
        2 => [
            1,3
        ],
        3 => [
            2
        ]
    ];

	public function setUp()
	{
		$this->graphGenerator = $this->createMock(AdjacencyList::class);
		$this->repositoryGateway = $this->createMock(RepositoryGateway::class);
		$this->dataTransformer = $this->createMock(DatabaseTransformer::class);
		$this->algorithmFactory = $this->createMock(AlgorithmFactory::class);
        $this->algorithm = $this->createMock(BFSAlgorithm::class);
        $this->path = $this->createMock(Path::class);

        $this->repositoryGateway->method('getAllRepositories')
             ->willReturn($this->repositoryData);

         $this->dataTransformer->method('transformData')
         ->willReturn($this->transformedData);

         $this->graphGenerator->method('generateGraph')
         ->willReturn($this->graphData);

         $this->algorithmFactory->method('getAlgorithm')
         ->willReturn($this->algorithm);

         $this->algorithm->method('findPath')
         ->willReturn($this->path);

         $this->path->method('__toString')
         ->willReturn("1 => 2 => 3");

         $this->path->method('getHops')
         ->willReturn(2);

         $this->path->method('getPath')
         ->willReturn([1,2,3]);

		$this->pathFinderService = new SimplePathfinderService(
			$this->graphGenerator,
            $this->repositoryGateway,
            $this->dataTransformer,
            $this->algorithmFactory
			);
	}

    public function testGetShortestPath()
    {
        $path = $this->pathFinderService->getShortestPath(1,3);   
        $this->assertTrue(is_array($path));
        $this->assertCount(3, $path);
        $this->assertArrayHasKey('hops', $path);
        $this->assertArrayHasKey('pathStr', $path);
        $this->assertArrayHasKey('pathData', $path);
        $this->assertEquals(2, $path['hops']);

    }
}