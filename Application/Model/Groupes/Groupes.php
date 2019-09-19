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

                for($i=0;$i<$nbrGroupe;$i++){
                    $array[$i] = array();
                    var_dump($array[$i]);
                }

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
        $nbrGroupe = $_SESSION['nbrGroupe'] ;
        $nbrEleveParGroupe = $_SESSION['eleveParGroupe'];
        $db = new Model();
        $analyste = $db->select('etudiant','WHERE code_personalite_code_personalite_idcode_personalite=16')
            ->fetchAll();
        $diplomate = $db->select('etudiant','WHERE code_personalite_code_personalite_idcode_personalite=15')
            ->fetchAll();
        $sentinelle = $db->select('etudiant','WHERE code_personalite_code_personalite_idcode_personalite=17')
            ->fetchAll();
        $explorateur = $db->select('etudiant','WHERE code_personalite_code_personalite_idcode_personalite=18')
            ->fetchAll();
        $leader = $db->select('etudiant','WHERE code_personalite_code_personalite_idcode_personalite=14')
            ->fetchAll();

        $data = [
            '1'=>$analyste,
            '2'=>$diplomate,
            '3'=>$sentinelle,
            '4'=>$explorateur,
            '5'=>$leader
        ];

        $nbrLeader = count($leader);

        $bigArray = array();
        for($i=0;$i<$nbrGroupe;$i++) {
            array_push($bigArray,array());
        }
         shuffle($analyste);
        shuffle($diplomate);
         shuffle($sentinelle);
        shuffle($explorateur);

        for($j=0;$j<count($bigArray)+1;$j++){

            if($nbrLeader == $nbrGroupe) {
                $random = array_rand($leader, 1);
                array_push($bigArray[$j], $leader[$random]);
                unset($leader[$random]);


                /*while(count($bigArray[$j])<=$nbrEleveParGroupe) {


                }*/
            }
                if (count($bigArray[$j]) <= $nbrEleveParGroupe) {
                    if (count($analyste) != 0) {

                        $randomAnalyste = array_shift($analyste);
                        array_push($bigArray[$j], $randomAnalyste);

                    }
                    if (count($diplomate) != 0) {
                        $randomDiplomate = array_shift($diplomate);
                        array_push($bigArray[$j], $randomDiplomate);
                    }
                    if (count($sentinelle) != 0) {
                        $randomSentinelle = array_shift($sentinelle);
                        array_push($bigArray[$j], $randomSentinelle);
                    }
                    if (count($explorateur) != 0) {
                        $randomExplorateur = array_shift($explorateur);
                        array_push($bigArray[$j], $randomExplorateur);
                    }
                }



        }
        print('<pre>'.print_r($bigArray,true).'</pre>');
        /*print('Analyste:<pre>'.print_r($analyste,true).'</pre>');
        print('Diplomate:<pre>'.print_r($diplomate,true).'</pre>');
        print('Sentinelle:<pre>'.print_r($sentinelle,true).'</pre>');
        print('Explorateur:<pre>'.print_r($explorateur,true).'</pre>');*/






        return $data;
    }
}