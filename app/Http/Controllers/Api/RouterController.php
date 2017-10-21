<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ApiServer\Server;
use App\Services\ApiServer\Error;
use App\Services\Common as Common;

/**
 * Api入口控制器
 */
class RouterController extends Controller
{
    /**
     * API总入口
     */
    public function index()
    {
        $server = new Server(new Error);
        return $server->run();
    }
}
