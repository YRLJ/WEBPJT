# WEBPJT

MVC.

UI GUidelines

[color palette](palette.pdf)

#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: users
#------------------------------------------------------------

CREATE TABLE users(
        username  Varchar (100) NOT NULL ,
        firstname Varchar (100) NOT NULL ,
        lastname  Varchar (100) NOT NULL ,
        password  Varchar (100) NOT NULL ,
        type      Varchar (100) NOT NULL
	,CONSTRAINT users_PK PRIMARY KEY (username)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: courses
#------------------------------------------------------------

CREATE TABLE courses(
        courseid Varchar (100) NOT NULL ,
        subject  Varchar (100) NOT NULL ,
        title    Varchar (1000) NOT NULL ,
        content  Varchar (3072) NOT NULL ,
        url      Varchar (2000) ,
        score    Int ,
        idquizz  Int NOT NULL
	,CONSTRAINT courses_PK PRIMARY KEY (courseid)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: quizz
#------------------------------------------------------------

CREATE TABLE quizz(
        idquizz   Int  Auto_increment  NOT NULL ,
        quizz_url Varchar (2000) NOT NULL ,
        courseid  Varchar (100) NOT NULL
	,CONSTRAINT quizz_PK PRIMARY KEY (idquizz)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Appartenir
#------------------------------------------------------------

CREATE TABLE Appartenir(
        courseid Varchar (100) NOT NULL ,
        username Varchar (100) NOT NULL
	,CONSTRAINT Appartenir_PK PRIMARY KEY (courseid,username)
)ENGINE=InnoDB;




ALTER TABLE courses
	ADD CONSTRAINT courses_quizz0_FK
	FOREIGN KEY (idquizz)
	REFERENCES quizz(idquizz);

ALTER TABLE courses 
	ADD CONSTRAINT courses_quizz0_AK 
	UNIQUE (idquizz);

ALTER TABLE quizz
	ADD CONSTRAINT quizz_courses0_FK
	FOREIGN KEY (courseid)
	REFERENCES courses(courseid);

ALTER TABLE quizz 
	ADD CONSTRAINT quizz_courses0_AK 
	UNIQUE (courseid);

ALTER TABLE Appartenir
	ADD CONSTRAINT Appartenir_courses0_FK
	FOREIGN KEY (courseid)
	REFERENCES courses(courseid);

ALTER TABLE Appartenir
	ADD CONSTRAINT Appartenir_users1_FK
	FOREIGN KEY (username)
	REFERENCES users(username);