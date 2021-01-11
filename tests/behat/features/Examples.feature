@example
Feature: Web drivers
  In order to verify that web drivers are working
  As a user
  I should be able to load the homepage
  With and without Javascript

  @javascript
  Scenario: Load a page with Javascript
    Given I am on "/"
    Then I should be on "/"

  Scenario: Load a page without Javascript
    Given I am on "/"
    Then the response status code should be 200

  @api @javascript
  Scenario: Check node creation by manoj
    Given I am logged in as user with name "manoj"
    Then I should be on "/user/2/edit"

  Scenario: Check user node creation
    Given I am not logged in
    And I am at "/user/login"
    And for "name" I enter "manoj"
    And for "pass" I enter "123456"
    And I press the "Log in" button
    Then I should be on "/user/2"

  # @api
  # Scenario: Load page as authenticated user
  #   Given I am logged in as a user with the "authenticated user" role
  #   And I am on "/"
  #   Then the response status code should be 200
