#Insert matiere

INSERT INTO matiere(Nom) VALUES('Français');
INSERT INTO matiere(Nom) VALUES('Mathematique');
INSERT INTO matiere(Nom) VALUES('Anglais');

#Insert eleves

INSERT INTO personne (Nom,Prenom,Mdp,Photo,TypeP) VALUES ( 'Jean','Lario','123','child.svg','Eleve');
  SET @idpersonne := (SELECT LAST_INSERT_ID() );
INSERT INTO eleve(Classe,IdPersonne) VALUES ( 'CP',@idpersonne);

INSERT INTO personne (Nom,Prenom,Mdp,Photo,TypeP) VALUES ( 'Louis','Lasalle','123','child.svg','Eleve');
  SET @idpersonne := (SELECT LAST_INSERT_ID() );
INSERT INTO eleve(Classe,IdPersonne)VALUES ( 'CE',@idpersonne);

INSERT INTO personne (Nom,Prenom,Mdp,Photo,TypeP) VALUES ( 'Marc','Legre','123','child.svg','Eleve');
  SET @idpersonne := (SELECT LAST_INSERT_ID() );
INSERT INTO eleve(Classe,IdPersonne) VALUES ( 'CP',@idpersonne);

#Insert professeur

INSERT INTO personne (Nom,Prenom,Mdp,Photo,TypeP) VALUES ( 'Lucie','Lant','123','parent.svg','Prof');
  SET @idpersonne := (SELECT LAST_INSERT_ID() );
INSERT INTO professeur(IdPersonne,IdMatiere_Pratiquer) VALUES ( @idpersonne,1);

INSERT INTO personne (Nom,Prenom,Mdp,Photo,TypeP) VALUES ( 'Hanna','Boul','123','parent.svg','Prof');
  SET @idpersonne := (SELECT LAST_INSERT_ID() );
INSERT INTO professeur(IdPersonne,IdMatiere_Pratiquer) VALUES ( @idpersonne,2);



#Insert questionnaire

INSERT INTO `questionnaire` (`IdQuestionnaire`, `Theme`,`IdMatiere`) VALUES (NULL, 'Nombre en lettre','2');
  SET @idQuestionnaire := (SELECT LAST_INSERT_ID() );

INSERT INTO `questions` (`IdQuestion`, `IdQuestionnaire`,`Question`, `BonneR`, `Reponse1`, `Reponse2`, `Reponse3`)
VALUES (NULL, @idQuestionnaire,'Comment ecrit-on 11 ?', 'Onze', 'Honze', 'Onse', 'Onnze');

INSERT INTO `questions` (`IdQuestion`, `IdQuestionnaire`,`Question`, `BonneR`, `Reponse1`, `Reponse2`, `Reponse3`)
VALUES (NULL, @idQuestionnaire,'Comment ecrit-on 100 ?', 'Sans', 'Cents', 'Cent', 'Cen');


INSERT INTO `questionnaire` (`IdQuestionnaire`, `Theme`,`IdMatiere`)
VALUES (NULL, 'Vocabulaire maison','3');
  SET @idQuestionnaire := (SELECT LAST_INSERT_ID() );

INSERT INTO `questions` (`IdQuestion`, `IdQuestionnaire`,`Question`, `BonneR`, `Reponse1`, `Reponse2`, `Reponse3`)
VALUES (NULL, @idQuestionnaire,'Comment dit-on maison ?', 'Home', 'Casa', 'Land', 'Hearth');

INSERT INTO `questions` (`IdQuestion`, `IdQuestionnaire`,`Question`, `BonneR`, `Reponse1`, `Reponse2`, `Reponse3`)
VALUES (NULL, @idQuestionnaire,'Que signifie le mot dog ?', 'Chien', 'Rat', 'Chat', 'Lion');



# Vue complete des élève
CREATE VIEW EleveInfo AS
        SELECT personne.IdPersonne, personne.Nom, personne.Mdp, personne.Photo, eleve.Classe
        FROM personne,eleve
        WHERE personne.IdPersonne=eleve.IdPersonne;

  
# Vue complete des Professeur
CREATE VIEW ProfesseurInfo AS
        SELECT personne.IdPersonne, personne.Nom as Nom_pers, personne.Mdp, personne.Photo, Matiere.nom as Nom_mat
        FROM personne,Professeur,Matiere
        WHERE personne.IdPersonne=Professeur.IdPersonne ;








