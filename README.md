# constitution_groupes
Emilie - Lou - Joffrey - Theo - Huguette - Jerome - Edwin - Thomas


Git Master : Joffrey - Github

Feuille de route :
 - Définir les algorithmes selon les critères
 - Algorithme par rapport aux notations : moyennes “back-front”, faire un système d’importance par rapport au projet (pourcentage)
 - Algorithme par rapport aux groupes de personnalité, permettant de définir des groupes hétérogènes avec des profils complémentaires
 - Si un profil n’existe pas on incrémente d’une case (à définir dans la partie algo)
 - La personne rentre toutes les données
 - Modélisation de la base de données


Technos:
 - BDD -> Mysql
 - Language -> PHP(objet) + Ruby

<h2>Algo affinage en fonction des notes :</h2>

<h4>Objet élève</h4>

<ul>
<li>id : int</li>
<li>average_back_rating : float</li>
<li>average_front_rating : float</li>
</ul>

<h4>Calcul du nb de front, back et mid par groupe.</h4>

Pour chaque groupe analyse de la moyenne de chaque élève
retourne le total de front, back et mid par groupe

<h4>Analyse des groupes en fonctions des notes</h4>

On regarde si les groupes sont homogènes<br>
<strong>DEBUT</strong><br>
<strong>SI</strong> groupe homogène (3 front 2 back ou 3 front 1 back 1 mid ...)<br>
<strong>ALORS</strong> on préserve le groupe<br>
<strong>SINON</strong> réafectation_des_membres()<br>
<strong>FIN</strong>
<h4>Réafectation des groupes en cas d'écart de moyenne importantes</h4>

<strong>SI</strong> un groupe n'est pas homogène<br> 

<strong>DEBUT</STRONG><br>
on regarde ce qui lui manque<br>
<strong>SI</strong> il manque un front le groupe devient "demandeur" de front<br>
<strong>SI</strong> il manque un back le groupe devient "demandeur" de back<br>
<strong>ALORS</strong> il y à échange entre les groupes demandeurs à partir de l'index 1 des groupes (étant donné que 0 = leader)<br>
<strong>SINON</strong> on garde les membres actuelles<br>
<strong>FIN</strong>


<h2>Requête API pour test avec POSTMAN</h2>

 POST url : https://ruby-skill-teams-filtering.knmriznm.cf/
 Param : _json
 
 BODY JSON : https://sharemycode.fr/n71           


