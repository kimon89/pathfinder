<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
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
	 *   path="/api/shortest-path",
	 *   summary="Get the shortest path between two nodes",
	 *   @SWG\Response(
	 *     response=200,
	 *     description="The shortest path"
	 *   ),
	 *   @SWG\Response(
	 *     response="default",
	 *     description=""
	 *   )
	 * )
	 */
    public function getPath()
    {
    	return 200;
    }
 }