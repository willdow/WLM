

#Insert eleves

INSERT INTO personne (Nom,Prenom,Mdp,Photo) VALUES ( 'Jean','Lario','123','child.svg');
  SET @idpersonne := (SELECT LAST_INSERT_ID() );
INSERT INTO eleve(Classe,IdPersonne) VALUES ( 'CP',@idpersonne);

INSERT INTO personne (Nom,Prenom,Mdp,Photo) VALUES ( 'Louis','Lasalle','123','child.svg');
  SET @idpersonne := (SELECT LAST_INSERT_ID() );
INSERT INTO eleve(Classe,IdPersonne)VALUES ( 'CE',@idpersonne);

INSERT INTO personne (Nom,Prenom,Mdp,Photo) VALUES ( 'Marc','Legre','123','child.svg');
  SET @idpersonne := (SELECT LAST_INSERT_ID() );
INSERT INTO eleve(Classe,TypeP,IdPersonne) VALUES ( 'CP','Eleve',@idpersonne);

#Insert professeur

INSERT INTO personne (Nom,Prenom,Mdp,Photo) VALUES ( 'Lucie','Lant','123','parent.svg');
  SET @idpersonne := (SELECT LAST_INSERT_ID() );
INSERT INTO Professeur(IdPersonne,TypeProf,IdMatiere_Pratiquer) VALUES ( @idpersonne,"Prof",'1');

INSERT INTO personne (Nom,Prenom,Mdp,Photo) VALUES ( 'Hanna','Boul','123','parent.svg');
  SET @idpersonne := (SELECT LAST_INSERT_ID() );
INSERT INTO Professeur(IdPersonne,TypeProf,IdMatiere_Pratiquer) VALUES ( @idpersonne,"Prof",'2');

#Insert matiere

INSERT INTO matiere(Nom) VALUES('Français');
INSERT INTO matiere(Nom) VALUES('Mathematique');
INSERT INTO matiere(Nom) VALUES('Anglais');

#Insert questionnaire

INSERT INTO `questionnaire` (`IdQuestionnaire`, `Theme`,`Matiere`)
VALUES (NULL, 'Nombre en lettre',);


# Vue complete des élève
CREATE VIEW EleveInfo AS
        SELECT personne.IdPersonne, personne.Nom, personne.Mdp, personne.Photo, eleve.Classe
        FROM personne,eleve
        WHERE personne.IdPersonne=eleve.IdPersonne;

  
# Vue complete des Professeur
CREATE VIEW ProfesseurInfo AS
        SELECT personne.IdPersonne, personne.Nom, personne.Mdp, personne.Photo, Matiere.nom
        FROM personne,Professeur,Matiere
        WHERE personne.IdPersonne=Professeur.IdPersonne ;

INSERT INTO `questionnaire` (`IdQuestionnaire`, `Theme`)
VALUES (NULL, 'Nombre en lettre');


SET @idQuestionnaire := (SELECT LAST_INSERT_ID() );
INSERT INTO `questions` (`IdQuestion`, `IdQuestionnaire`,`Question`, `BonneR`, `Reponse1`, `Reponse2`, `Reponse3`)
VALUES (NULL, @idQuestionnaire,'Comment ecrit-on 11 ?', 'Onze', 'Honze', 'Onse', 'Onnze');
INSERT INTO `questions` (`IdQuestion`, `IdQuestionnaire`,`Question`, `BonneR`, `Reponse1`, `Reponse2`, `Reponse3`)
VALUES (NULL, @idQuestionnaire,'Comment ecrit-on 100 ?', 'Sans', 'Cents', 'Cent', 'Cen');

