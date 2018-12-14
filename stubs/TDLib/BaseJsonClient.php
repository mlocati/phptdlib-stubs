<?php

namespace TDLib;

/**
 * Class BaseJsonClient
 * @package TDLib
 */
class BaseJsonClient
{
    /**
     * @return void
     */
    public function create(): void {}

    /**
     * @return void
     */
    public function destroy(): void {}

    /**
     * @param string $query
     * @return string
     */
    public function execute(string $query): string {}

    /**
     * @param string $query
     */
    public function send(string $query): void {}

    /**
     * @param float $timeout
     * @return string
     */
    public function receive(float $timeout): string {}
}
