<?php


class Groupes
{
    public function nbrGroupe() {

        if(isset($_POST['valider'])){
            $nbrEleve = $_POST['eleve'];
            $nbrGroupe = $_POST['groupe'];
            $_SESSION['nbrGroupe'] = $nbrGroupe;

            if($nbrEleve % $nbrGroupe === 0){
                $nbrEleveParGroupe = $nbrEleve / $nbrGroupe;
                $_SESSION['eleveParGroupe'] = $nbrEleveParGroupe;


                return $nbrEleveParGroupe;

            } else {
                $nbrEleveParGroupe = $nbrEleve / $nbrGroupe;
                $nbrEleveSup = $nbrEleve % $nbrGroupe;
                $_SESSION['eleveParGroupe'] = floor($nbrEleveParGroupe);
                $_SESSION['nbrGroupe'] = $nbrGroupe;
                $_SESSION['nbrEleveSup'] = $nbrEleveSup;

                echo 'Il y aura '.floor($nbrEleveParGroupe).' personnes par groupe et '.$nbrEleveSup.' personnes en plus';



            }

        }



    }

    public function listLeader() {
        $db = new Model();
        $data = $db->select('etudiant','WHERE code_personalite_code_personalite_idcode_personalite=14')->fetchAll();

        return $data;
    }

    public function triGroupe(){
        $db = new Model();
        $analyste = $db->select('etudiant','WHERE code_personalite_code_personalite_idcode_personalite=16')
            ->fetchAll();
        $diplomate = $db->select('etudiant','WHERE code_personalite_code_personalite_idcode_personalite=15')
            ->fetchAll();
        $sentinelle = $db->select('etudiant','WHERE code_personalite_code_personalite_idcode_personalite=17')
            ->fetchAll();
        $explorateur = $db->select('etudiant','WHERE code_personalite_code_personalite_idcode_personalite=18')
            ->fetchAll();

        $data = [
            '1'=>$analyste,
            '2'=>$diplomate,
            '3'=>$sentinelle,
            '4'=>$explorateur
        ];



        return $data;
    }
}