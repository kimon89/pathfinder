<?php

namespace App\Services\GraphGenerator;

interface GraphGeneratorInterface
{
    /**
     * Data as a graph.
     *
     * @param array $data [description]
     *
     * @return array [description]
     */
    public function generateGraph(array $data);
}
