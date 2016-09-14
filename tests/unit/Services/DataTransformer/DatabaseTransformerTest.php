<?php
use PHPUnit\Framework\TestCase;

use App\Services\DataTransformer\DatabaseTransformer;

class DatabaseTransformerTest extends TestCase
{
	protected $databaseTransformer;
	protected $sampleInput = [
		[
			'id' => 1,
			'name' => 'Test',
			'repositories' => [
				[
					'id' => 100,
					'name' => 'TestRepo'
				]
			]
		]
	];
	protected $correctOutput = [
		1 => [
			'TestRepo'
		]
	];

	public function setUp()
	{
		$this->databaseTransformer = new DatabaseTransformer();
	}
	public function testTransformData()
	{
		$res = $this->databaseTransformer->transformData($this->sampleInput);
		$this->assertTrue(is_array($res));
		$this->assertCount(1, $res);
		$this->assertArrayHasKey(1, $res);
		$this->assertEquals($this->correctOutput[1], $res[1]);

	}
}
