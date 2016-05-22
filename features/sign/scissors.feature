Feature: Compare Scissors sign
  In order to play a game based on signs
  Signs need to be related to each other

  Scenario: Comparing Scissors to Spock
    Given first sign is Scissors
    Given second sign is Spock
    Then first sign does not win with second sign

  Scenario: Comparing Scissors to Lizard
    Given first sign is Scissors
    Given second sign is Lizard
    Then first sign wins with second sign

  Scenario: Comparing Scissors to Rock
    Given first sign is Scissors
    Given second sign is Rock
    Then first sign does not win with second sign

  Scenario: Comparing Scissors to Paper
    Given first sign is Scissors
    Given second sign is Paper
    Then first sign wins with second sign

  Scenario: Comparing Scissors to Scissors
    Given first sign is Scissors
    Given second sign is Scissors
    Then first sign does not win with second sign