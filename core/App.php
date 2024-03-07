<?php

namespace App\Core;

use App\Core\Http\Request;
use App\Core\Router\Router;

class App
{
    public function run() : void
    {
        $router = new Router();
        $request = Request::createFromGlobals();

        $router->dispatch($request->uri(), $request->method());
    }
}
