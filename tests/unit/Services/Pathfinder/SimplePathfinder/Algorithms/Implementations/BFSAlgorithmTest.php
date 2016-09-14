<?php
use PHPUnit\Framework\TestCase;

use App\Services\Pathfinder\SimplePathfinder\Algorithms\Implementations\BFSAlgorithm;
use App\Models\Path;
use App\Exceptions\NodeDoesNotExistException;

class BFSAlgorithmTest extends TestCase
{
	protected $algorithm;

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
		$this->algorithm = new BFSAlgorithm(new \SplQueue(), $this->graphData, 1, 3);
	}

	public function testFindPath()
	{
		$res = $this->algorithm->findPath();
		$this->assertInstanceOf(Path::class, $res);
		$this->assertCount(3, $res->getPath());
	}

	public function testFindPathNodeDoesNotExistException()
	{
		$this->algorithm->setOrigin(5);
		$this->algorithm->setDestination(14);
		$this->expectException(NodeDoesNotExistException::class);
		$res = $this->algorithm->findPath();
	}
}