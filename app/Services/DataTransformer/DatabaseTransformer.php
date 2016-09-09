<?php

namespace App\Services\DataTransformer;

use App\Services\DataTransformer\DataTransformerInterface;

class DatabaseTransformer implements DataTransformerInterface
{
	public function transformData(array $inputData)
	{
		$data = [];
		foreach ($inputData as $user) {
			foreach ($user['repositories'] as $repo){
				$data[$user['id']][] = $repo['name'];
			}
		}
		return $data;
	}
}