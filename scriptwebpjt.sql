#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: courses
#------------------------------------------------------------

CREATE TABLE courses(
        courseid Varchar (60) NOT NULL ,
        subject  Varchar (100) NOT NULL ,
        title    Varchar (1000) NOT NULL ,
        content  Varchar (2000) NOT NULL ,
        url      Varchar (2000) NOT NULL,
        valide   Varchar (10) NOT NULL
	,CONSTRAINT courses_PK PRIMARY KEY (courseid)
)ENGINE=InnoDB;


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
# Table: quiz
#------------------------------------------------------------

CREATE TABLE quiz(
        idquiz   Int NOT NULL ,
        quiz_url Varchar (2000) NOT NULL ,
        courseid Varchar (60) NOT NULL
	,CONSTRAINT quiz_PK PRIMARY KEY (idquiz)

	,CONSTRAINT quiz_courses_FK FOREIGN KEY (courseid) REFERENCES courses(courseid)
	,CONSTRAINT quiz_courses_AK UNIQUE (courseid)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: usercourses
#------------------------------------------------------------

CREATE TABLE usercourses(
        idusercourses Varchar (100) NOT NULL ,
        score         Int NOT NULL ,
        username      Varchar (100) NOT NULL ,
        courseid      Varchar (60) NOT NULL
	,CONSTRAINT usercourses_PK PRIMARY KEY (idusercourses)

	,CONSTRAINT usercourses_users_FK FOREIGN KEY (username) REFERENCES users(username)
	,CONSTRAINT usercourses_courses0_FK FOREIGN KEY (courseid) REFERENCES courses(courseid)
)ENGINE=InnoDB;

