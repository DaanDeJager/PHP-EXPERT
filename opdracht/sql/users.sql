CREATE TABLE users
(
id int(11),
firstname varchar(100),
lastname varchar(255),
email varchar(255),
wachtwoord varchar(255),
team int(3),
contributie int(1)
);

INSERT INTO users (id, firstname, lastname, email, wachtwoord, team, contributie)
VALUES (1,'Tom','Panini','panini@email.com','4006', 1, 2 ),
(2,'Piet','Salsa','salsa@email.com','4006', 2, 1 ),
(3,'Gerard','Salsa','gerard@email.com','4006', 3, 1 ),
(4,'Johan','Salsa','johan@email.com','4006', 4, 1 );

CREATE TABLE teams
(
id int(11),
naam varchar(100)
);

INSERT INTO teams (id, naam)
VALUES (1,'Ajax'),
(2,'Feyenoord'),
(3,'Willem II'),
(4,'PSV');
        
