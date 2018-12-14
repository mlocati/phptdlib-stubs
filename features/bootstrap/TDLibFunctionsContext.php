<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;
use PHPUnit\Framework\Assert;

class TDLibFunctionsContext implements Context
{
    /**
     * @var \TDLib\BaseJsonClient|null $client
     */
    private $client;
    private $result;

    /**
     * @Given I call function td_json_client_create
     */
    public function iCallFunctionTdJsonClientCreate()
    {
        $this->client = td_json_client_create();
    }

    /**
     * @Then client must be :type
     * @param string $type
     */
    public function clientMustBe(string $type)
    {
        Assert::assertSame(get_class($this->client), $type);
    }

    /**
     * @Given I call function td_json_client_execute with query :query
     * @param string $query
     */
    public function iCallFunctionTdJsonClientExecuteWithQuery(string $query)
    {
        $this->result = td_json_client_execute($this->client, $query);
        Assert::assertSame($this->result, '{"@type":"error","code":400,"message":"Function can\'t be executed synchronously"}');
    }

    /**
     * @Given wait :seconds seconds
     * @param float $seconds
     */
    public function waitSeconds(float $seconds = 0.5)
    {
        usleep($seconds * 10 ^ 6);
    }

    /**
     * @Given I call function td_json_client_send with query :query
     */
    public function iCallFunctionTdJsonClientSendWithQuery(string $query)
    {
        td_json_client_send($this->client, $query);
    }

    /**
     * @Given I call function td_json_client_receive
     */
    public function iCallFunctionTdJsonClientReceive()
    {
        $this->result = td_json_client_receive($this->client, 1);
    }

    /**
     * @Then result should be :result
     */
    public function resultShouldBe($result)
    {
        Assert::assertSame($this->result, $result);
    }

    /**
     * @Given I call function td_json_client_destroy
     */
    public function iCallFunctionTdJsonClientDestroy()
    {
        try {
            td_json_client_destroy($this->client);
        } catch (Exception $exception) {
            var_dump($this->client);
        }
    }
}
