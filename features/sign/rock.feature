Feature: Compare Rock sign
  In order to play a game based on signs
  Signs need to be related to each other

  Scenario: Comparing Rock to Paper
    Given first sign is Rock
    Given second sign is Paper
    Then first sign does not win with second sign

  Scenario: Comparing Rock to Scissors
    Given first sign is Rock
    Given second sign is Scissors
    Then first sign wins with second sign

  Scenario: Comparing Rock to Spock
    Given first sign is Rock
    Given second sign is Spock
    Then first sign does not win with second sign

  Scenario: Comparing Rock to Lizard
    Given first sign is Rock
    Given second sign is Lizard
    Then first sign wins with second sign

  Scenario: Comparing Rock to Rock
    Given first sign is Rock
    Given second sign is Rock
    Then first sign does not win with second sign