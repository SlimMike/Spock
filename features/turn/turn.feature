Feature: There is a Turn
  In order to play a game based on turns
  We need to have a Turn

  Scenario: Creating a Turn
    Given first sign is Spock
    Given second sign is Lizard
    Then we can create a Turn with first and second sign
    Then Turns first sign is Spock
    Then Turns second sign is Lizard