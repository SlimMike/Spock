Feature: There is a Turn
  In order to play a game based on turns
  We need to have a Turn

  Scenario: Creating a Turn
    Given first sign is Spock
    Given second sign is Lizard
    Then we can create a Turn with first and second sign
    Then Turns first sign is Spock
    Then Turns second sign is Lizard

  Scenario: Turn won by first Sign
    Given first sign is Spock
    Given second sign is Scissors
    Given there is a Turn with first and second sign
    Then last Turn is won by fist sign
    And last Turn is not won by second sign
    And last Turn does not results in a draw

  Scenario: Turn won by second Sign
    Given first sign is Lizard
    Given second sign is Rock
    Given there is a Turn with first and second sign
    Then last Turn is not won by first sign
    And last Turn is won by second sign
    And last Turn does not results in a draw

  Scenario: Turn results in a draw
    Given first sign is Rock
    Given second sign is Rock
    Given there is a Turn with first and second sign
    Then last Turn is not won by first sign
    And last Turn is not won by second sign
    And last Turn results in a draw