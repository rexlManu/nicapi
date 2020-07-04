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

}