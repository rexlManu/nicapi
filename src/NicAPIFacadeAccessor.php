<?php


namespace rexlManu\NicAPI;


use NicAPI\NicAPI;

class NicAPIFacadeAccessor
{

    /**
     * send a get request
     * @param $name the endpoint
     * @param $arguments for the endpoint
     * @return mixed the response
     */
    public static function get($name, $arguments = [])
    {
        return app('nicapi.client')->get($name, $arguments = []);
    }

    /**
     * send a post request
     * @param $name the endpoint
     * @param $arguments for the endpoint
     * @return mixed the response
     */
    public static function post($name, $arguments = [])
    {
        return app('nicapi.client')->post($name, $arguments = []);
    }

    /**
     * send a delete request
     * @param $name the endpoint
     * @param $arguments for the endpoint
     * @return mixed the response
     */
    public static function delete($name, $arguments = [])
    {

        return app('nicapi.client')->delete($name, $arguments = []);
    }

    /**
     * send a put request
     * @param $name the endpoint
     * @param $arguments for the endpoint
     * @return mixed the response
     */
    public static function put($name, $arguments = [])
    {
        return app('nicapi.client')->put($name, $arguments = []);
    }


}
