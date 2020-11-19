<?php


namespace Core;


class Router
{
    protected $routes = [];

    /**
     * Contains the params of the current match.
     * @var array
     */
    protected $params = [];

    /**
     * @param string $route
     * @param array $params
     */
    public function addRout(string $route ,array $params) : void {
        $this->routes[$route] = $params;
    }

    /**
     * @return array
     */
    public function getRoutes() : array
    {
        return $this->routes;
    }

    /**
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }

    /**
     * @param string $url
     * @return bool
     */
    public function match(string $url) : bool {
        $result = false;

        foreach ($this->routes as $route => $route_values){
            if($url == $route){
                $result = true;
                $this->params = $route_values;
                break;
            }
        }
        return $result;
    }
}