<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;
use PHPUnit\Framework\Assert;
use TDLib\JsonClient;

/**
 * Defines application features from the specific context.
 */
class JsonClientContext implements Context
{
    /**
     * @var JsonClient[] $clients
     */
    private $clients;

    private $responses;

    private $executeResponse;

    /**
     * @Given I create JsonClient with alias :arg1
     * @Given I create JsonClient
     * @param string $alias
     */
    public function iCreateJsonClientWithAlias(string $alias = 'default')
    {
        $this->clients[$alias] = new JsonClient();
    }

    /**
     * @Then JsonClient :alias must be client
     * @Then JsonClient must be client
     * @param string $alias
     */
    public function JsonClientMustBeClient(string $alias = 'default')
    {
        Assert::assertNotNull($this->clients[$alias]);
        Assert::assertSame(JsonClient::class, get_class($this->clients[$alias]));
    }

    /**
     * @param string $alias
     * @return JsonClient|null
     */
    private function getClientByAlias(string $alias = 'default'): ?JsonClient
    {
        $this->JsonClientMustBeClient($alias);
        return $this->clients[$alias];
    }

    /**
     * @When I call JsonClient :alias query with td function :function
     * @When I call JsonClient query with td function :function
     * @param string $alias
     * @param string $function
     */
    public function iCallJsonClientQueryWithTdFunction(string $alias = 'default', string $function = '')
    {
        $client = $this->getClientByAlias($alias);
        $queryStringArray = [
            '@type' => $function
        ];
        $client->query(json_encode($queryStringArray), 2);
    }

    /**
     * @Then responses of JsonClient :alias should contain type :type
     * @Then responses of JsonClient should contain type :type
     * @param string $alias
     * @param string $type
     */
    public function responsesOfJsonClientShouldContainType(string $alias = 'default', string $type = '')
    {
        $client = $this->getClientByAlias($alias);
        $lastResponses = $client->getReceivedResponses();
        $this->responses = array_merge($this->responses ?? [], $lastResponses);
        $contain = false;
        /**
         * @todo foreach in lastResponses and $this->responses after merge
         */
        foreach ($lastResponses as $response) {
            $response = json_decode($response);
            if (isset($response->{'@type'}) && $response->{'@type'} === $type) {
                $contain = true;
            }
        }
        Assert::assertSame(true, $contain, sprintf('JsonClient "%s" hasn\'t type "%s" in responses', $alias, $type));
    }

    /**
     * @When I call JsonClient :alias execute with query :query
     * @When I call JsonClient execute with query :query
     * @param string $alias
     * @param string $query
     */
    public function iExecuteJsonClientWithQuery(string $alias = 'default', string $query = '')
    {
        $client = $this->getClientByAlias($alias);
        $this->executeResponse = $client->execute($query);
    }

    /**
     * @Then execute response should contain type :type
     */
    public function executeResponseShouldContainType($type)
    {
        $response = json_decode($this->executeResponse);
        Assert::assertSame($type, $response->{'@type'} ?? null);
    }
}
