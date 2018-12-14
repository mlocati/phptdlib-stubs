@phptdlib
Feature: phptdlib td_json_client_* functions
  In order to test base tdlib json client functions
  As an developer
  I want to call any of them

  @td_json_client
  Scenario: td_json_client_*
    Given I call function td_json_client_create
    Then client must be 'TDLib\BaseJsonClient'

    Given I call function td_json_client_execute with query '{"@type":"getAuthorizationState"}'

    Given I call function td_json_client_send with query '{"@type":"getAuthorizationState"}'
    And wait 0.5 seconds

    Given I call function td_json_client_receive
    Then result should be '{"@type":"updateAuthorizationState","authorization_state":{"@type":"authorizationStateWaitTdlibParameters"}}'

#    Given I call function td_json_client_destroy
