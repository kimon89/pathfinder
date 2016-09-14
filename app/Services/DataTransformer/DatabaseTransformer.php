<?php

namespace App\Services\DataTransformer;

/**
 * Transforms data from the database to a more compatible form.
 */
class DatabaseTransformer implements DataTransformerInterface
{
    /**
     * Transforms the database data to a more compatible form
     * so that is easier to generate the graph.
     *
     * @param array $inputData [description]
     *
     * @return array [description]
     */
    public function transformData(array $inputData)
    {
        $data = [];
        foreach ($inputData as $user) {
            foreach ($user['repositories'] as $repo) {
                $data[$user['id']][] = $repo['name'];
            }
        }

        return $data;
    }
}
