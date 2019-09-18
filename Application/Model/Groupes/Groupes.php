<?php


class Groupes
{
    public function nbrGroupe() {

        if(isset($_POST['valider'])){
            $nbrEleve = $_POST['eleve'];
            $nbrGroupe = $_POST['groupe'];

            if($nbrEleve % $nbrGroupe === 0){
                $nbrEleveParGroupe = $nbrEleve / $nbrGroupe;


                return $nbrEleveParGroupe;

            } else {
                $nbrEleveParGroupe = $nbrEleve / $nbrGroupe;
                $nbrEleveSup = $nbrEleve % $nbrGroupe;

                echo 'Il y aura '.floor($nbrEleveParGroupe).' personnes par groupe et '.$nbrEleveSup.' personnes en plus';



            }

        }



    }
}