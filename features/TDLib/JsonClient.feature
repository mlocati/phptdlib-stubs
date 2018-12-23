@phptdlib @JsonClient
Feature: phptdlib JsonClient class
  In order to test JsonClient class
  As an developer
  I want to

  Scenario: JsonClient behavior
    Given I create JsonClient
    Then JsonClient must be client

    When I call JsonClient query with td function 'getAuthorizationState'
    Then responses of JsonClient should contain type 'authorizationStateWaitTdlibParameters'

    When I call JsonClient execute with query '{"@type":"getAuthorizationState"}'
    Then execute response should contain type 'error'
