<?php

use TDLib\BaseJsonClient;

/**
 * @return BaseJsonClient
 */
function td_json_client_create(): BaseJsonClient {}

/**
 * @param BaseJsonClient $client
 */
function td_json_client_destroy(BaseJsonClient $client): void {} // Return void can be used in PHP 7.1 only
/**
 * @param BaseJsonClient $client
 * @param string $query
 * @return string
 */
function td_json_client_execute(BaseJsonClient $client, string $query): string {}

/**
 * @param BaseJsonClient $client
 * @param string $query
 */
function td_json_client_send(BaseJsonClient $client, string $query): void {}

/**
 * @param BaseJsonClient $client
 * @param float $timeout
 * @return string
 */
function td_json_client_receive(BaseJsonClient $client, float $timeout): string {}
