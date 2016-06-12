Feature: There is a Game vs AI
  In order to enable a player to play with AI
  We need to have a type of Game that operates on 1 human player and 1 ai player

  Scenario: Creating a Game between Player and Ai
    Given human first player
    Given ai second player
    Then We can create a game with first and second player

  Scenario: Adding a turn to Game
    Given game with human and ai player
    Given new turn
    Then we can add new turn to the game

  Scenario: Adding a turn to finished Game
    Given game with human and ai player
    And adding a turn lost by player
    And adding a turn lost by player
    And adding a turn lost by player
    Then game is finished
    Then we cannot add new turn

  Scenario: Counting turns won by a player on fresh game
    Given game with human and ai player
    Then count of turns won by a player equals to "0"

  Scenario: Counting turns won by a player with one round won
    Given game with human and ai player
    And adding turn won by player
    Then count of turns won by a player equals to "1"

  Scenario: Counting turns won by a player with all turn types
    Given game with human and ai player
    And adding turn won by player
    And adding turn won by player
    And adding a draw turn
    And adding a turn lost by player
    Then count of turns won by a player equals to "2"

  Scenario: Checking if Game is finished
    Given game with human and ai player
    Then game is not finished

  Scenario: Finishing game when there are three rounds won by ai
    Given game with human and ai player
    And adding a turn lost by player
    And adding a turn lost by player
    And adding a turn lost by player
    Then game is finished

  Scenario: Not finishing game when there are three rounds won by player
    Given game with human and ai player
    And adding turn won by player
    And adding turn won by player
    And adding turn won by player
    Then game is not finished

  Scenario: New game has zero score for player
    Given game with human and ai player
    Then score for player is equal to "0"

  Scenario: Draw round doesn't add to player score
    Given game with human and ai player
    And adding a draw turn
    Then score for player is equal to "0"

  Scenario: Lost round doesn't add to player score
    Given game with human and ai player
    And adding a turn lost by player
    Then score for player is equal to "0"

  Scenario: Round won by player adds two to player score
    Given game with human and ai player
    And adding turn won by player
    Then score for player is equal to "2"

  Scenario: Player won two rounds, then lost three
    Given game with human and ai player
    And adding turn won by player
    And adding turn won by player
    And adding a turn lost by player
    And adding a turn lost by player
    And adding a turn lost by player
    Then score for player is equal to "4"