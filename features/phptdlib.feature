@phptdlib
Feature: phptdlib td_json_client_* functions
  In order to test base tdlib json client functions
  As an developer
  I want to call any of them

  Scenario: td_json_client_create
    Given I call function 'td_json_client_create'
    Then result should be 'object'
