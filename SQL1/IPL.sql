CREATE DATABASE IPL;
USE IPL;
CREATE TABLE Venue(id varchar(50) PRIMARY KEY,name varchar(50) NOT NULL UNIQUE);

INSERT INTO Venue (id, name)
VALUES 
    ('VEN001', 'The Grand Hall'),
    ('VEN002', 'The Rose Garden'),
    ('VEN003', 'The Sapphire Room'),
    ('VEN004', 'The Diamond Lounge'),
    ('VEN005', 'The Top Floor');
    

CREATE TABLE Teams(id VARCHAR(50)  PRIMARY KEY,name VARCHAR(50) NOT NULL UNIQUE ,captain VARCHAR(50) NOT NULL UNIQUE);

INSERT INTO Teams (id, name, captain) VALUES 
('CSK', 'Chennai Super Kings', 'MS Dhoni'),
('DC', 'Delhi Capitals', 'Rishabh Pant'),
('KXIP', 'Kings XI Punjab', 'KL Rahul'),
('KKR', 'Kolkata Knight Riders', 'Eoin Morgan'),
('MI', 'Mumbai Indians', 'Rohit Sharma'),
('RR', 'Rajasthan Royals', 'Sanju Samson'),
('RCB', 'Royal Challengers Bangalore', 'Virat Kohli'),
('SRH', 'Sunrisers Hyderabad', 'Kane Williamson');

create table Matches(id int not null,venue_id varchar(50) not null,date_of_match date not null,team1_id varchar(50) not null,team2_id varchar(50) not null, toss_winner varchar(50) not null, winner varchar(50) not null,FOREIGN KEY (venue_id) REFERENCES Venue(id),FOREIGN KEY (team1_id) REFERENCES Teams(id),FOREIGN KEY (team2_id) REFERENCES Teams(id));

SELECT v.name AS 'Venue of match',m.date_of_match AS 'Date of match',t1.name AS 'Team 1 name',t2.name AS 'Team 2 name',t1.captain AS 'Captain of team 1',t2.captain AS 'Captain of team 2',m.toss_winner AS 'Toss won by',m.winner AS 'Match won by' FROM Matches m JOIN Venue v ON m.venue_id = v.id JOIN Teams t1 ON m.team1_id = t1.id JOIN Teams t2 ON m.team2_id = t2.id order by m.date_of_match;