Feature: There is a Game vs AI
  In order to enable a player to play with AI
  We need to have a type of Game that operates on 1 human player and 1 ai player

  Scenario: Creating a Game between Player and Ai
    Given human first player
    Given ai second player
    Then We can create a game with first and second player