Feature: Compare Lizard sign
  In order to play a game based on signs
  Signs need to be related to each other

  Scenario: Comparing Lizard to Rock
    Given first sign is Lizard
    Given second sign is Rock
    Then first sign does not win with second sign

  Scenario: Comparing Lizard to Paper
    Given first sign is Lizard
    Given second sign is Paper
    Then first sign wins with second sign

  Scenario: Comparing Lizard to Scissors
    Given first sign is Lizard
    Given second sign is Scissors
    Then first sign does not win with second sign

  Scenario: Comparing Lizard to Spock
    Given first sign is Lizard
    Given second sign is Spock
    Then first sign wins with second sign

  Scenario: Comparing Lizard to Lizard
    Given first sign is Lizard
    Given second sign is Lizard
    Then first sign does not win with second sign