<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use PHPUnit\Framework\Assert;

/**
 * Class TDLibFunctionsContext
 * @todo: TDLibFunctions must extends BaseJsonClientContext
 */
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
     * @Given I call function td_json_client_execute with query:
     * @param PyStringNode $query
     */
    public function iCallFunctionTdJsonClientExecuteWithQuery(PyStringNode $query)
    {
        $this->result = td_json_client_execute($this->client, $query);
    }

    /**
     * @Given I call function td_json_client_send with query:
     * @param PyStringNode $query
     */
    public function iCallFunctionTdJsonClientSendWithQuery(PyStringNode $query)
    {
        td_json_client_send($this->client, $query);
    }

    /**
     * @Given I call function td_json_client_receive
     */
    public function iCallFunctionTdJsonClientReceive()
    {
        $this->result = td_json_client_receive($this->client, 0);
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
        td_json_client_destroy($this->client);
    }
}
