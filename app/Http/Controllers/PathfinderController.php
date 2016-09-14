<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Services\Pathfinder\PathfinderServiceInterface;

/**
 * @SWG\Swagger(
 *   @SWG\Info(
 *     title="Pathfinder API",
 *     version="1.0.0"
 *   )
 * )
 */
class PathfinderController extends BaseController
{
    /**
     * @SWG\Get(
     *   path="/api/shortest-path/{origin}/{destination}",
     *   summary="Get the shortest path between two nodes",
     *    @SWG\Parameter(
     *       name="origin",
     *       description="ID of the origin user",
     *       required=true,
     *       type="integer",
     *       format="int64",
     *       minimum="1",
     *       in="path"
     *     ),
     *     @SWG\Parameter(
     *       name="destination",
     *       description="ID of the destination user",
     *       required=true,
     *       type="integer",
     *       format="int64",
     *       minimum="1",
     *       in="path"
     *     ),
     *   @SWG\Response(
     *     response="default",
     *     description=""
     *   )
     * )
     */
    public function getPath($origin, $destination, PathfinderServiceInterface $pathfinder)
    {
        //pass the data to the pathfinder service
        return $pathfinder->getShortestPath((int) $origin, (int) $destination);
    }
}
