Feature: Pathfinder
  In order get similar users
  As a researcher
  I need to be able to get the paths between users

  Scenario: Get the shortest path between two users
  	Given I  make a "GET" request to "http://localhost/api/shortest-path/1/3?testing"
  	Then the response code should be 200 
  	And I should have a count of 2 hops
  	And I should see "1 => 2 => 3" as path