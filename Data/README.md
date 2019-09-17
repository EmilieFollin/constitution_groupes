Explication de la base de données.


Procédure stockées : 

- Moyenne Back :

BEGIN
SELECT COUNT(`note`) from technologies_has_etudiant inner JOIN technologies on technologies.idtechnologies = technologies_idtechnologies where technologies.front_back = 1;
END

- Moyenne Front :
BEGIN

SELECT COUNT(`note`) from technologies_has_etudiant inner JOIN technologies on technologies.idtechnologies = technologies_idtechnologies where technologies.front_back = 0;
END
