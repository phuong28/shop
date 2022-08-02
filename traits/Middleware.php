<?php 

trait Middleware 
{
    public function middleware($middleware, $params = [])
    {
        if (is_array($middleware)) {
            foreach ($middleware as $_middleware) {
                require_once("app/Middlewares/{$_middleware}.php");
                $middlewareClass = new $_middleware();
                return call_user_func(array($middlewareClass, 'handle'), $params);
            }
        }
        require_once("app/Middlewares/{$middleware}.php");
        $middlewareClass = new $middleware();
        return call_user_func(array($middlewareClass, 'handle'), $params);
    }
}