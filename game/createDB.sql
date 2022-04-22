CREATE DATABASE gameDB;
USE gameDB;

CREATE TABLE users(
userID VARCHAR(50) PRIMARY KEY,
displayName VARCHAR(16)
);

CREATE TABLE rooms(
roomID VARCHAR(11) NOT NULL PRIMARY KEY,
roomCode VARCHAR(10) NOT NULL,
hostPlayer VARCHAR(50) NOT NULL,
player1 VARCHAR(50) NOT NULL,
player2 VARCHAR(50),
player3 VARCHAR(50),
player4 VARCHAR(50),
player5 VARCHAR(50),
player6 VARCHAR(50),
player7 VARCHAR(50),
player8 VARCHAR(50)
);


CREATE TABLE sentences (
round_number INT NOT NULL,
userID INT(11) NOT NULL REFERENCES users(userID),
sentence TEXT(120),
roomID VARCHAR(11) NOT NULL REFERENCES rooms(roomID),
PRIMARY KEY (userID)
);
