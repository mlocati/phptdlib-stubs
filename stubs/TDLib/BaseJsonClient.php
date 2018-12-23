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
     * @deprecated since 0.0.8
     * @see https://github.com/yaroslavche/phptdlib/commit/fc25b2f86cb79d08dfae68d5dab03c72a9d4a843#diff-98fc547cee3a55fa1eb926f7291b5392
     *
     */
    public function create(): void { trigger_error('JsonClient::create', E_DEPRECATED); }

    /**
     * @return void
     * @deprecated since 0.0.8
     * @see https://github.com/yaroslavche/phptdlib/commit/fc25b2f86cb79d08dfae68d5dab03c72a9d4a843#diff-98fc547cee3a55fa1eb926f7291b5392
     */
    public function destroy(): void { trigger_error('JsonClient::destroy', E_DEPRECATED); }

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
