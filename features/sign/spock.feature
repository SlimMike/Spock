Feature: Compare Spock sign
  In order to play a game based on signs
  Signs need to be related to each other

  Scenario: Comparing Spock to Lizard
    Given first sign is Spock
    Given second sign is Lizard
    Then first sign does not win with second sign

  Scenario: Comparing Spock to Rock
    Given first sign is Spock
    Given second sign is Rock
    Then first sign wins with second sign

  Scenario: Comparing Spock to Paper
    Given first sign is Spock
    Given second sign is Paper
    Then first sign does not win with second sign

  Scenario: Comparing Spock to Scissors
    Given first sign is Spock
    Given second sign is Scissors
    Then first sign wins with second sign

  Scenario: Comparing Spock to Spock
    Given first sign is Spock
    Given second sign is Spock
    Then first sign does not win with second sign