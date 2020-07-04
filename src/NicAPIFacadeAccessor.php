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
    public static function get($name, $arguments)
    {
        return NicAPI::get($name, $arguments);
    }

    /**
     * send a post request
     * @param $name the endpoint
     * @param $arguments for the endpoint
     * @return mixed the response
     */
    public static function post($name, $arguments)
    {
        return NicAPI::post($name, $arguments);
    }

    /**
     * send a delete request
     * @param $name the endpoint
     * @param $arguments for the endpoint
     * @return mixed the response
     */
    public static function delete($name, $arguments)
    {

        return NicAPI::delete($name, $arguments);
    }

    /**
     * send a put request
     * @param $name the endpoint
     * @param $arguments for the endpoint
     * @return mixed the response
     */
    public static function put($name, $arguments)
    {
        return NicAPI::put($name, $arguments);
    }


}