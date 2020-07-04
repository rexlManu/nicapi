<?php


namespace rexlManu\NicAPI\Facades;

use Illuminate\Support\Facades\Facade;
use rexlManu\NicAPI\NicAPIFacadeAccessor;

/**
 * Class NicAPI
 * @package rexlManu\NicAPI\Facades
 *
 * @method static get($name, $arguments)
 * @method static post($name, $arguments)
 * @method static put($name, $arguments)
 * @method static delete($name, $arguments)
 */
class NicAPI extends Facade
{

    protected static function getFacadeAccessor()
    {
        return NicAPIFacadeAccessor::class;
    }

}