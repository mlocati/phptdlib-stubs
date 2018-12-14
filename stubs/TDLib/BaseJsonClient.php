<?php
namespace TDLib;

class BaseJsonClient {

    public function __construct()
    {
    }

    public function __destruct()
    {
    }

    /**
     * @param string $query
     * @return string
     */
    public function execute(string $query):string
    {
    }

    /**
     * @param string $query
     */
    public function send(string $query)
    {
    }

    /**
     * @param float $timeout
     * @return string
     */
    public function receive(float $timeout):string
    {
    }
}