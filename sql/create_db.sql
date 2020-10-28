# Create db - only necessary if running this script as admin for first time
CREATE DATABASE sportportdb;

# Creates user with username 'fakeuser' and password 'fakepassword', then gives them access to all tables in this db
GRANT ALL PRIVILEGES ON sportportdb.* To 'fakeuser'@'localhost' IDENTIFIED BY 'fakepassword';

USE sportportdb;

# create users table
CREATE TABLE users
(
    UserID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    LastName NVARCHAR(255) NOT NULL,
    FirstName NVARCHAR(255) NOT NULL,
    Email NVARCHAR(255) NOT NULL,
    DateOfBirth DATE NOT NULL,
    PasswordHash BINARY(64) NOT NULL,
    Salt BINARY(64) NOT NULL
);
CREATE UNIQUE INDEX users_UserID_uindex ON users (UserID);
CREATE UNIQUE INDEX users_Email_uindex ON users (Email);


# Create sports table
CREATE TABLE sports
(
    SportID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    SportName NVARCHAR(255) NOT NULL
);
CREATE UNIQUE INDEX sports_SportID_uindex ON sports (SportID);
CREATE UNIQUE INDEX sports_SportName_uindex ON sports (SportName);


# Create leagues table
CREATE TABLE leagues
(
    LeagueID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    LeagueName NVARCHAR(255) NOT NULL,
    SportID INT NOT NULL,
    CONSTRAINT leagues_sports_SportID_fk FOREIGN KEY (SportID) REFERENCES sports (SportID)
);
CREATE UNIQUE INDEX leagues_LeagueID_uindex ON leagues (LeagueID);


# Create teams table
CREATE TABLE teams
(
    TeamID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    TeamName NVARCHAR(255) NOT NULL,
    LeagueID INT NOT NULL,
    CONSTRAINT teams_leagues_LeagueID_fk FOREIGN KEY (LeagueID) REFERENCES leagues (LeagueID)
);
CREATE UNIQUE INDEX teams_TeamID_uindex ON teams (TeamID);
CREATE UNIQUE INDEX teams_TeamName_uindex ON teams (TeamName);


# Create team_membership table
CREATE TABLE team_membership
(
    TeamID INT NOT NULL,
    UserID INT NOT NULL,
    IsCaptain BOOLEAN DEFAULT FALSE  NOT NULL,
    CONSTRAINT team_membership_teams_TeamID_fk FOREIGN KEY (TeamID) REFERENCES teams (TeamID),
    CONSTRAINT team_membership_users_UserID_fk FOREIGN KEY (UserID) REFERENCES users (UserID)
);


# Create games table
CREATE TABLE games
(
    GameID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    AteamID INT NOT NULL,
    BteamID INT NOT NULL,
    AteamScore INT NOT NULL,
    BteamScore INT NOT NULL,
    Date DATE NOT NULL,
    CONSTRAINT games_teams_ATeamID_fk FOREIGN KEY (AteamID) REFERENCES teams (TeamID),
    CONSTRAINT games_teams_BTeamID_fk FOREIGN KEY (BteamID) REFERENCES teams (TeamID)
);
CREATE UNIQUE INDEX games_GameID_uindex ON games (GameID);