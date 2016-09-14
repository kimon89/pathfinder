<?php
use PHPUnit\Framework\TestCase;

use App\Models\Path;

class PathTest extends TestCase
{
	protected $path;
	protected $pathSample = [
		10,
		15,
		24
	];

	public function setUp()
	{
		$this->path = new Path($this->pathSample);
	}
	public function testToString()
	{
		$pathStr = (string) $this->path;
		$this->assertEquals('10 => 15 => 24', $pathStr);
	}

	public function testGetHops()
	{
		$hops = $this->path->getHops();
		$this->assertEquals(count($this->pathSample)-1, $hops);
	}
}