<?php


namespace rexlManu\NicAPI\Services;


use rexlManu\NicAPI\Facades\NicAPI;

class NicAPIService
{

    private $config;

    public function __construct($config = [])
    {
        $this->config = $config;
        if (function_exists('config')) {
            $this->config = config('nicapi');
        }

        \NicAPI\NicAPI::init($this->config['key'], $this->config['url']);
    }

    /**
     * send a get request
     * @param $name the endpoint
     * @param $arguments for the endpoint
     * @return mixed the response
     */
    public function get($name, $arguments = [])
    {
        return \NicAPI\NicAPI::get($name, $arguments);
    }

    /**
     * send a post request
     * @param $name the endpoint
     * @param $arguments for the endpoint
     * @return mixed the response
     */
    public function post($name, $arguments)
    {
        return NicAPI::post($name, $arguments = []);
    }

    /**
     * send a delete request
     * @param $name the endpoint
     * @param $arguments for the endpoint
     * @return mixed the response
     */
    public function delete($name, $arguments = [])
    {

        return NicAPI::delete($name, $arguments);
    }

    /**
     * send a put request
     * @param $name the endpoint
     * @param $arguments for the endpoint
     * @return mixed the response
     */
    public function put($name, $arguments = [])
    {
        return NicAPI::put($name, $arguments);
    }

}
