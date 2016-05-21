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