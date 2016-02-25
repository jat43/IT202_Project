drop table if exists clients;
create table clients
  (
  clientID INT(11) PRIMARY KEY AUTO_INCREMENT,
  clientName varchar(32),
  clientPW varchar(64),
  activeSession varchar(128),
  lastLogin datetime
  );
