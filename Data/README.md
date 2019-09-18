Explication de la base de données.


Procédure stockées : 

- Moyenne Back :
Paramètre : idetudiant (int)
SELECT AVG(`note`) FROM `technologies_has_etudiant` inner JOIN technologies on technologies.idtechnologies = technologies_idtechnologies where technologies.front_back = 1;

- Moyenne Front :
Paramètre : idetudiant (int)
SELECT AVG(`note`) FROM `technologies_has_etudiant` inner JOIN technologies on technologies.idtechnologies = technologies_idtechnologies where technologies.front_back = 0;
