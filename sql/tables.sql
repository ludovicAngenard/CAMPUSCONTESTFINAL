DROP TABLE IF EXISTS Utilisateur ;
CREATE TABLE Utilisateur (IdUtilisateur_Utilisateur INT AUTO_INCREMENT NOT
NULL,
Nom_Utilisateur VARCHAR(50),
Prenom_Utilisateur VARCHAR(50),
Email_Utilisateur VARCHAR(50),
MotDePasse_Utilisateur VARCHAR(30),
PRIMARY KEY (IdUtilisateur_Utilisateur)) ENGINE=InnoDB;

DROP TABLE IF EXISTS Recommandation ;
CREATE TABLE Recommandation (IdRecommandation_Recommandation INT
AUTO_INCREMENT NOT NULL,
Entreprise_Recommandation VARCHAR(50),
Profession_Recommandation VARCHAR(50),
ContenuRecommandation_Recommandation TEXT,
EstValide_Recommandation BOOLEAN,
IdUtilisateur_Utilisateur INT
PRIMARY KEY (IdRecommandation_Recommandation)) ENGINE=InnoDB;

DROP TABLE IF EXISTS Projet ;
CREATE TABLE Projet (idProjet_Projet INT AUTO_INCREMENT NOT NULL,
NomProjet_Projet VARCHAR(50),
PRIMARY KEY (idProjet_Projet)) ENGINE=InnoDB;

DROP TABLE IF EXISTS AVIS ;
CREATE TABLE AVIS (IdAvis_AVIS INT AUTO_INCREMENT NOT NULL,
ContenuAvis_AVIS TEXT,
Note_AVIS INT,
EstVerifier_AVIS BOOLEAN,
IdUtilisateur_Utilisateur INT
idProjet_Projet INT
PRIMARY KEY (IdAvis_AVIS)) ENGINE=InnoDB;

ALTER TABLE Recommandation ADD CONSTRAINT
FK_Recommandation_IdUtilisateur_Utilisateur FOREIGN KEY
(IdUtilisateur_Utilisateur) REFERENCES Utilisateur
(IdUtilisateur_Utilisateur);
ALTER TABLE AVIS ADD CONSTRAINT FK_AVIS_IdUtilisateur_Utilisateur FOREIGN
KEY (IdUtilisateur_Utilisateur) REFERENCES Utilisateur
(IdUtilisateur_Utilisateur);
ALTER TABLE AVIS ADD CONSTRAINT FK_AVIS_idProjet_Projet FOREIGN KEY
(idProjet_Projet) REFERENCES Projet (idProjet_Projet);
