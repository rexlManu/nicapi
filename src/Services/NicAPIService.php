<?php


namespace rexlManu\NicAPI\Services;


use rexlManu\NicAPI\Facades\NicAPI;
use NicAPI\NicAPI as Api;

class NicAPIService
{

    private $config;

    public function __construct($config = [])
    {
        $this->config = $config;
        if (function_exists('config')) {
            $this->config = config('nicapi');
        }

        Api::init($this->config['key'], $this->config['url']);
    }

    /**
     * send a get request
     * @param $name the endpoint
     * @param $arguments for the endpoint
     * @return mixed the response
     */
    public function get($name, $arguments = [])
    {
        return Api::get($name, $arguments);
    }

    /**
     * send a post request
     * @param $name the endpoint
     * @param $arguments for the endpoint
     * @return mixed the response
     */
    public function post($name, $arguments = [])
    {
        return Api::post($name, $arguments);
    }

    /**
     * send a delete request
     * @param $name the endpoint
     * @param $arguments for the endpoint
     * @return mixed the response
     */
    public function delete($name, $arguments = [])
    {

        return Api::delete($name, $arguments);
    }

    /**
     * send a put request
     * @param $name the endpoint
     * @param $arguments for the endpoint
     * @return mixed the response
     */
    public function put($name, $arguments = [])
    {
        return Api::put($name, $arguments);
    }

}
