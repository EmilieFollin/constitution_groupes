<p>Leaders :</p>
<ul>
    <?php
        foreach($leader as $etudiants) {
            echo '<li>'.$etudiants['nom'].'</li>';
        }
?>
</ul>
<p>Analystes :</p>
<ul>
    <?php
    foreach($a['1'] as $analyste) {
        echo '<li>'.$analyste['nom'].'</li>';
    }
    ?>
</ul>
<p>Diplomates :</p>
<ul>
    <?php
    foreach($a['2'] as $diplomate) {
        echo '<li>'.$diplomate['nom'].'</li>';
    }
    ?>
</ul>
<p>Sentinelles :</p>
<ul>
    <?php
    foreach($a['3'] as $sentinelle) {
        echo '<li>'.$sentinelle['nom'].'</li>';
    }
    ?>
</ul>
<p>Explorateurs :</p>
<ul>
    <?php
    foreach($a['4'] as $explorateur) {
        echo '<li>'.$explorateur['nom'].'</li>';
    }
    ?>
</ul>

<p>Il y a <?=$nbrLeader?> leaders pour <?=$_SESSION['nbrGroupe']?> groupe</p>
<?php
if($_SESSION['nbrEleveSup'] !== null) {
    echo '<p>Il y a '.$_SESSION['eleveParGroupe'].' personnes par groupe et '.$_SESSION['nbrEleveSup'].' personnes supplémentaires</p>';
}
?>
