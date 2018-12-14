<?php

namespace TDLib;

/**
 * Class JsonClient
 * @package TDLib
 */
class JsonClient extends BaseJsonClient
{
    /**
     * @param string $query
     * @param float $timeout
     * @return string
     */
    public function query(string $query, float $timeout): string {}

    /**
     * @return array
     */
    public function getReceivedResponses(): array {}

    /**
     * @param float $timeout
     */
    public function setDefaultTimeout(float $timeout): void {}
}
