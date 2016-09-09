<?php
use PHPUnit\Framework\TestCase;

use App\Services\GraphGenerator\AdjacencyList;

class AdjacencyListTest extends TestCase
{
	protected $generator;
	protected $sampleInput = [
		1 => ['A','B'],
		2 => ['A'],
		3 => ['C','B'],
		4 => ['F']
	];
	protected $correctOutput = [
		1 => [2,3],
		2 => [1],
		3 => [1]
	];

	public function setUp()
	{
		$this->generator = new AdjacencyList();
	}
	public function testGenerateGraph()
	{
		$res = $this->generator->generateGraph($this->sampleInput);
		$this->assertTrue(is_array($res));
		$this->assertCount(3, $res);
		foreach ($res as $v) {
			$this->assertTrue(is_array($v));
		}
		foreach ($this->correctOutput as $k => $v) {
			foreach ($v as $val) {
				$this->assertContains($val, $res[$k]);
			}
		}
	}
}