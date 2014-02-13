Feature: Search
  Scenario: Searching
    Given I am on "http://colourbox.com"
    When I fill in "q" with "horse"
    And I follow "Search"
    Then I should see "We have hidden"
