Explication de la base de données.


Procédure stockées : 

- Moyenne Back : calculée à partir  aux notes attribuées aux technologies back

Paramètre : idetudiant (int)

BEGIN
SELECT AVG(`note`) FROM `technologies_has_etudiant` inner JOIN technologies on technologies.idtechnologies = technologies_idtechnologies where technologies.front_back = 1 AND `etudiant_idetudiant` = idetudiant;
END

- Moyenne Front : calculée à partir  aux notes attribuées aux technologies front

Paramètre : idetudiant (int)

BEGIN
SELECT AVG(`note`) FROM `technologies_has_etudiant` inner JOIN technologies on technologies.idtechnologies = technologies_idtechnologies where technologies.front_back = 0 AND `etudiant_idetudiant` = idetudiant;
END

-Note par projet : calculée à partir des moyennes back et front de l'étudiant en fonction du coefficient d'importance (back et front) utilisée pour le projet en cours.
Paramètre : idetudiant (int)
            idprojet (int)
        
        BEGIN 
        
        DECLARE coeffback int;
        declare coefffront int;
        declare moyenneback int;
        declare moyennefront int;
        declare note float;
        
        
        -- on selectionne nos données
        
        set @coeffback = (SELECT coeff_back FROM projet WHERE projet.idprojet =  idprojet)/100;
        
        set @coefffront = (SELECT coeff_front FROM projet WHERE projet.idprojet =  idprojet)/100;
        
        set @moyennefront = (SELECT moyenne_front FROM etudiant WHERE etudiant.idetudiant = idetudiant);
        
        set @moyenneback = (SELECT moyenne_back FROM etudiant WHERE etudiant.idetudiant = idetudiant);
        
        
        
        
        
        SELECT ROUND(@coefffront,2);
        SELECT ROUND(@coeffback,2);
        SELECT @moyenneback;
        SELECT @moyennefront;
        
        -- calcul de la note 
        set @note = (@moyenneback * @coeffback)+(@moyennefront * @coefffront);
        
        
        SELECT @note;
        
        -- ajout des données dans la table
        
        INSERT INTO etudiant_has_projet VALUES (idetudiant, idprojet, ROUND(@note,2));
        
        
        END

Total d'élèves par classe : calculé à partir du nombre d'étudiant liés à cette classe 
parametres : idclasse (int)

        BEGIN
        
        DECLARE nbrEleve int;
        
        set @nbrEleve = (SELECT COUNT(*) from etudiant where classe_idclasse = idclasse);
        
        SELECT @nbrEleve;
        
        UPDATE classe SET total_eleves = @nbrEleve where idclasse = idclasse;
        
        END
        
