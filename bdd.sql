#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: USERS
#------------------------------------------------------------

CREATE TABLE USERS(
        id           Int  Auto_increment  NOT NULL ,
        username     Varchar (100) NOT NULL ,
        firstname    Varchar (100) NOT NULL ,
        surname      Varchar (100) NOT NULL ,
        pwd          Varchar (100) NOT NULL ,
        admin        Bool NOT NULL ,
        dateCreation Date NOT NULL
	,CONSTRAINT USERS_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: MOVIES
#------------------------------------------------------------

CREATE TABLE MOVIES(
        id    Int  Auto_increment  NOT NULL ,
        title Varchar (500) NOT NULL ,
        image Varchar (500) NOT NULL ,
        link  Varchar (500) NOT NULL
	,CONSTRAINT MOVIES_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: UERS_INFOS
#------------------------------------------------------------

CREATE TABLE UERS_INFOS(
        id        Int  Auto_increment  NOT NULL ,
        birthDate Date NOT NULL ,
        adress    Varchar (100) NOT NULL ,
        telNumber Varchar (50) NOT NULL
	,CONSTRAINT UERS_INFOS_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: VIEWS
#------------------------------------------------------------

CREATE TABLE VIEWS(
        id        Int  Auto_increment  NOT NULL ,
        date      Datetime NOT NULL ,
        id_MOVIES Int NOT NULL ,
        id_USERS  Int NOT NULL
	,CONSTRAINT VIEWS_PK PRIMARY KEY (id)

	,CONSTRAINT VIEWS_MOVIES_FK FOREIGN KEY (id_MOVIES) REFERENCES MOVIES(id)
	,CONSTRAINT VIEWS_USERS0_FK FOREIGN KEY (id_USERS) REFERENCES USERS(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ACTORS
#------------------------------------------------------------

CREATE TABLE ACTORS(
        id        Int  Auto_increment  NOT NULL ,
        firstname Varchar (100) NOT NULL ,
        surname   Varchar (100) NOT NULL ,
        brithDate Date NOT NULL
	,CONSTRAINT ACTORS_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: REALS
#------------------------------------------------------------

CREATE TABLE REALS(
        id        Int  Auto_increment  NOT NULL ,
        firstname Varchar (100) NOT NULL ,
        surname   Varchar (100) NOT NULL ,
        brithDate Date NOT NULL
	,CONSTRAINT REALS_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: COMMENTS
#------------------------------------------------------------

CREATE TABLE COMMENTS(
        id        Int  Auto_increment  NOT NULL ,
        date      Datetime NOT NULL ,
        text      Varchar (500) NOT NULL ,
        id_MOVIES Int NOT NULL ,
        id_USERS  Int NOT NULL
	,CONSTRAINT COMMENTS_PK PRIMARY KEY (id)

	,CONSTRAINT COMMENTS_MOVIES_FK FOREIGN KEY (id_MOVIES) REFERENCES MOVIES(id)
	,CONSTRAINT COMMENTS_USERS0_FK FOREIGN KEY (id_USERS) REFERENCES USERS(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: GENDER
#------------------------------------------------------------

CREATE TABLE GENDER(
        id   Int  Auto_increment  NOT NULL ,
        name Varchar (50) NOT NULL
	,CONSTRAINT GENDER_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: MOVIES_INFOS
#------------------------------------------------------------

CREATE TABLE MOVIES_INFOS(
        id       Int  Auto_increment  NOT NULL ,
        synopsis Varchar (500) NOT NULL ,
        pegi     Int NOT NULL
	,CONSTRAINT MOVIES_INFOS_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: PLAY
#------------------------------------------------------------

CREATE TABLE PLAY(
        id        Int NOT NULL ,
        id_MOVIES Int NOT NULL
	,CONSTRAINT PLAY_PK PRIMARY KEY (id,id_MOVIES)

	,CONSTRAINT PLAY_ACTORS_FK FOREIGN KEY (id) REFERENCES ACTORS(id)
	,CONSTRAINT PLAY_MOVIES0_FK FOREIGN KEY (id_MOVIES) REFERENCES MOVIES(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: REALISE
#------------------------------------------------------------

CREATE TABLE REALISE(
        id       Int NOT NULL ,
        id_REALS Int NOT NULL
	,CONSTRAINT REALISE_PK PRIMARY KEY (id,id_REALS)

	,CONSTRAINT REALISE_MOVIES_FK FOREIGN KEY (id) REFERENCES MOVIES(id)
	,CONSTRAINT REALISE_REALS0_FK FOREIGN KEY (id_REALS) REFERENCES REALS(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: BELONG
#------------------------------------------------------------

CREATE TABLE BELONG(
        id              Int NOT NULL ,
        id_MOVIES_INFOS Int NOT NULL
	,CONSTRAINT BELONG_PK PRIMARY KEY (id,id_MOVIES_INFOS)

	,CONSTRAINT BELONG_GENDER_FK FOREIGN KEY (id) REFERENCES GENDER(id)
	,CONSTRAINT BELONG_MOVIES_INFOS0_FK FOREIGN KEY (id_MOVIES_INFOS) REFERENCES MOVIES_INFOS(id)
)ENGINE=InnoDB;

