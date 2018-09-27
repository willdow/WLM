#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
drop database if exists ecolewlm;
create database ecolewlm;
use ecolewlm;
CREATE TABLE appartenir
(
  IdMatiere       INT NOT NULL,
  IdQuestionnaire INT NOT NULL,
  PRIMARY KEY (IdMatiere, IdQuestionnaire)
)
  ENGINE = InnoDB;

CREATE INDEX Appartenir_questionnaire0_FK
  ON appartenir (IdQuestionnaire);

CREATE TABLE eleve
(
  IdPersonne INT         NOT NULL,
  TypeP        VARCHAR(50) NOT NULL ,
  #IdEleve    INT         NOT NULL,
  Classe     VARCHAR(50) NOT NULL,
  PRIMARY KEY (IdPersonne)
)
  ENGINE = InnoDB;

CREATE TABLE matiere
(
  IdMatiere INT AUTO_INCREMENT,
  Nom       VARCHAR(50) NOT NULL,
  PRIMARY KEY (IdMatiere)
)
  ENGINE = InnoDB;

ALTER TABLE appartenir
  ADD CONSTRAINT Appartenir_Matiere_FK
FOREIGN KEY (IdMatiere) REFERENCES matiere (IdMatiere);

CREATE TABLE passer
(
  IdQuestionnaire INT NOT NULL,
  IdPersonne      INT NOT NULL,
  IdEleve         INT NOT NULL,
  PRIMARY KEY (IdQuestionnaire, IdPersonne, IdEleve),
  CONSTRAINT Passer_Eleve0_FK
  FOREIGN KEY (IdPersonne, IdEleve) REFERENCES eleve (IdPersonne, IdEleve)
)
  ENGINE = InnoDB;

CREATE INDEX Passer_Eleve0_FK
  ON passer (IdPersonne, IdEleve);

CREATE TABLE personne
(
  IdPersonne INT AUTO_INCREMENT
    PRIMARY KEY,
  Nom        VARCHAR(50) NOT NULL,
  Prenom     VARCHAR(50) NOT NULL,
  Mdp        VARCHAR(50) NOT NULL,
  Photo      VARCHAR(50) NOT NULL
)
  ENGINE = InnoDB;

ALTER TABLE eleve
  ADD CONSTRAINT Eleve_Personne_FK
FOREIGN KEY (IdPersonne) REFERENCES personne (IdPersonne);

CREATE TABLE professeur
(
  IdPersonne          INT NOT NULL,
  #IdProfesseur        INT NOT NULL,
  TypeProf            VARCHAR(50),
  IdMatiere_Pratiquer INT NOT NULL,
  PRIMARY KEY (IdPersonne),
  CONSTRAINT Professeur_Personne_FK
  FOREIGN KEY (IdPersonne) REFERENCES personne (IdPersonne),
  CONSTRAINT Professeur_Matiere0_FK
  FOREIGN KEY (IdMatiere_Pratiquer) REFERENCES matiere (IdMatiere)
)
  ENGINE = InnoDB;

CREATE INDEX Professeur_Matiere0_FK
  ON professeur (IdMatiere_Pratiquer);

CREATE TABLE questionnaire
(
  IdQuestionnaire INT AUTO_INCREMENT,
  Theme           VARCHAR(50) NOT NULL,
  IdMatiere         VARCHAR(50) NOT NULL,
  PRIMARY KEY (IdQuestionnaire),
  FOREIGN KEY (IdMatiere) REFERENCES matiere (IdMatiere)
)
  ENGINE = InnoDB;

CREATE TABLE questions
(
  IdQuestion INT NOT NULL AUTO_INCREMENT,
  IdQuestionnaire INT NOT NULL ,
  Question        VARCHAR(50) NOT NULL,
  BonneR          VARCHAR(50) NOT NULL,
  Reponse1        VARCHAR(50) NOT NULL,
  Reponse2        VARCHAR(50) NOT NULL,
  Reponse3        VARCHAR(50) NOT NULL,
  PRIMARY KEY (IdQuestion),
  FOREIGN KEY (IdQuestionnaire) REFERENCES questionnaire (IdQuestionnaire)
)ENGINE = InnoDB;

ALTER TABLE appartenir
  ADD CONSTRAINT Appartenir_questionnaire0_FK
FOREIGN KEY (IdQuestionnaire) REFERENCES questionnaire (IdQuestionnaire);

ALTER TABLE passer
  ADD CONSTRAINT Passer_questionnaire_FK
FOREIGN KEY (IdQuestionnaire) REFERENCES questionnaire (IdQuestionnaire);

CREATE VIEW eleveinfo AS
  SELECT
    `ecolewlm`.`personne`.`IdPersonne` AS `IdPersonne`,
    `ecolewlm`.`personne`.`Nom`        AS `Nom`,
    `ecolewlm`.`personne`.`Mdp`        AS `Mdp`,
    `ecolewlm`.`personne`.`Photo`      AS `Photo`,
    `ecolewlm`.`eleve`.`Classe`        AS `Classe`
  FROM `ecolewlm`.`personne`
    JOIN `ecolewlm`.`eleve`
  WHERE (`ecolewlm`.`personne`.`IdPersonne` = `ecolewlm`.`eleve`.`IdPersonne`);

CREATE VIEW professeurinfo AS
  SELECT
    `ecolewlm`.`personne`.`IdPersonne` AS `IdPersonne`,
    `ecolewlm`.`personne`.`Nom`        AS `Nom`,
    `ecolewlm`.`personne`.`Mdp`        AS `Mdp`,
    `ecolewlm`.`personne`.`Photo`      AS `Photo`,
    `ecolewlm`.`matiere`.`Nom`         AS `Matiere`
  FROM `ecolewlm`.`personne`
    JOIN `ecolewlm`.`professeur`
    JOIN `ecolewlm`.`matiere`
  WHERE (`ecolewlm`.`personne`.`IdPersonne` = `ecolewlm`.`professeur`.`IdPersonne`);

