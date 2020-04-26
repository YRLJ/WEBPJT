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
        firstname Varchar (1000) NOT NULL ,
        lastname  Varchar (1000) NOT NULL ,
        password  Varchar (1000) NOT NULL ,
        type      Varchar (1000) NOT NULL
	,CONSTRAINT users_PK PRIMARY KEY (username)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: courses
#------------------------------------------------------------

CREATE TABLE courses(
        courseid Varchar (60) NOT NULL ,
        subject  Varchar (100) NOT NULL ,
        title    Varchar (1000) NOT NULL ,
        content  Varchar (65534) NOT NULL ,
        url      Varchar (2000) ,
        idquiz   Int NOT NULL
	,CONSTRAINT courses_PK PRIMARY KEY (courseid)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: quiz
#------------------------------------------------------------

CREATE TABLE quiz(
        idquiz   Int  Auto_increment  NOT NULL ,
        quiz_url Varchar (2000) NOT NULL ,
        courseid Varchar (100) NOT NULL
	,CONSTRAINT quiz_PK PRIMARY KEY (idquiz)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Effectuer
#------------------------------------------------------------

CREATE TABLE Effectuer(
        courseid Varchar (60) NOT NULL ,
        username Varchar (100) NOT NULL ,
        score    Int NOT NULL
	,CONSTRAINT Effectuer_PK PRIMARY KEY (courseid,username)
)ENGINE=InnoDB;




ALTER TABLE courses
	ADD CONSTRAINT courses_quiz0_FK
	FOREIGN KEY (idquiz)
	REFERENCES quiz(idquiz);

ALTER TABLE courses 
	ADD CONSTRAINT courses_quiz0_AK 
	UNIQUE (idquiz);

ALTER TABLE quiz
	ADD CONSTRAINT quiz_courses0_FK
	FOREIGN KEY (courseid)
	REFERENCES courses(courseid);

ALTER TABLE quiz 
	ADD CONSTRAINT quiz_courses0_AK 
	UNIQUE (courseid);

ALTER TABLE Effectuer
	ADD CONSTRAINT Effectuer_courses0_FK
	FOREIGN KEY (courseid)
	REFERENCES courses(courseid);

ALTER TABLE Effectuer
	ADD CONSTRAINT Effectuer_users1_FK
	FOREIGN KEY (username)
	REFERENCES users(username);
