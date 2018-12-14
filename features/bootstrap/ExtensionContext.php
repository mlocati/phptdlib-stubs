<?php

use Behat\Behat\Context\Context;
use PHPUnit\Framework\Assert;

/**
 * Defines application features from the specific context.
 */
class ExtensionContext implements Context
{
    private $result;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given I call function :functionName
     * @param string $name
     */
    public function iCallFunction(string $name)
    {
        if(function_exists($name))
        {
            $this->result = $name();
        }
    }

    /**
     * @Then result should be :result
     * @param string $result
     */
    public function resultShouldBe(string $result)
    {
        Assert::assertSame($result, gettype($this->result));
    }

}
