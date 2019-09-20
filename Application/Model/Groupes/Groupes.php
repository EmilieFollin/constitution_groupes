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
                if(isset($_SESSION['nbrEleveSup'])){
                    unset($_SESSION['nbrEleveSup']);
                }



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
        shuffle($leader);

        for($j=0;$j<count($bigArray);$j++){



            if($nbrLeader >= $nbrGroupe) {
                $newLeader = array_shift($leader);
                array_push($bigArray[$j], $newLeader);
                $countArray = count($bigArray[$j]);


                if ($nbrEleveParGroupe > $countArray) {




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

                    if ($nbrEleveParGroupe > count($bigArray[$j])) {




                        if (count($analyste) != 0 && $nbrEleveParGroupe > count($bigArray[$j])) {

                            $randomAnalyste = array_shift($analyste);
                            array_push($bigArray[$j], $randomAnalyste);


                        }
                        if (count($diplomate) != 0 &&$nbrEleveParGroupe > count($bigArray[$j])) {
                            $randomDiplomate = array_shift($diplomate);
                            array_push($bigArray[$j], $randomDiplomate);

                        }
                        if (count($sentinelle) != 0 && $nbrEleveParGroupe > count($bigArray[$j])) {
                            $randomSentinelle = array_shift($sentinelle);
                            array_push($bigArray[$j], $randomSentinelle);

                        }
                        if (count($explorateur) != 0 && $nbrEleveParGroupe > count($bigArray[$j])) {
                            $randomExplorateur = array_shift($explorateur);
                            array_push($bigArray[$j], $randomExplorateur);

                        }

                    }

                }






            } elseif ($nbrLeader < $nbrGroupe) {
                if(count($leader) != 0) {
                    $newLeader = array_shift($leader);
                    array_push($bigArray[$j], $newLeader);
                }
                $countArray = count($bigArray[$j]);


                if ($nbrEleveParGroupe > $countArray) {




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

                    if ($nbrEleveParGroupe > count($bigArray[$j])) {




                        if (count($analyste) != 0 && $nbrEleveParGroupe > count($bigArray[$j])) {

                            $randomAnalyste = array_shift($analyste);
                            array_push($bigArray[$j], $randomAnalyste);


                        }
                        if (count($diplomate) != 0 &&$nbrEleveParGroupe > count($bigArray[$j])) {
                            $randomDiplomate = array_shift($diplomate);
                            array_push($bigArray[$j], $randomDiplomate);

                        }
                        if (count($sentinelle) != 0 && $nbrEleveParGroupe > count($bigArray[$j])) {
                            $randomSentinelle = array_shift($sentinelle);
                            array_push($bigArray[$j], $randomSentinelle);

                        }
                        if (count($explorateur) != 0 && $nbrEleveParGroupe > count($bigArray[$j])) {
                            $randomExplorateur = array_shift($explorateur);
                            array_push($bigArray[$j], $randomExplorateur);

                        }

                    }


                }

            } elseif ($nbrLeader == 0) {
                $countArray = count($bigArray[$j]);


                if ($nbrEleveParGroupe > $countArray) {




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

                    if ($nbrEleveParGroupe > count($bigArray[$j])) {




                        if (count($analyste) != 0 && $nbrEleveParGroupe > count($bigArray[$j])) {

                            $randomAnalyste = array_shift($analyste);
                            array_push($bigArray[$j], $randomAnalyste);


                        }
                        if (count($diplomate) != 0 &&$nbrEleveParGroupe > count($bigArray[$j])) {
                            $randomDiplomate = array_shift($diplomate);
                            array_push($bigArray[$j], $randomDiplomate);

                        }
                        if (count($sentinelle) != 0 && $nbrEleveParGroupe > count($bigArray[$j])) {
                            $randomSentinelle = array_shift($sentinelle);
                            array_push($bigArray[$j], $randomSentinelle);

                        }
                        if (count($explorateur) != 0 && $nbrEleveParGroupe > count($bigArray[$j])) {
                            $randomExplorateur = array_shift($explorateur);
                            array_push($bigArray[$j], $randomExplorateur);

                        }

                    }

                }

            }








        }

        if($_SESSION['nbrEleveSup'] != 0){
            $arraySup = array();
            $result= array();


            if (count($leader) != 0) {


                $result = array_merge($arraySup,$leader);





            }

            if (count($analyste) != 0) {
                if(count($result) != 0){
                    $result =array_merge($result,$analyste);
                } else {

                $result = array_merge($arraySup,$analyste);
                }







            }
            if (count($diplomate) != 0 ) {
                if(count($result) != 0){

                $result = array_merge($result,$diplomate);
                } else {
                    $result = array_merge($arraySup,$diplomate);

                }


            }
            if (count($sentinelle) != 0) {
                if(count($result) != 0){

                $result = array_merge($result,$sentinelle);
                } else {
                    $result = array_merge($arraySup,$sentinelle);
                }


            }
            if (count($explorateur) != 0) {
                if(count($result) != 0){

                $result = array_merge($result,$explorateur);
                } else {
                    $result = array_merge($arraySup,$explorateur);
                }


            }

            for($p=0;$p<$_SESSION['nbrEleveSup'];$p++){
                if(count($result)!= 0){
                    $data = array_shift($result);
                    $index = array_rand($bigArray);
                    array_push($bigArray[$index],$data);
                }
            }



        }
        //print('<pre>'.print_r($bigArray,true).'</pre>');
        /*print('Analyste:<pre>'.print_r($analyste,true).'</pre>');
        print('Diplomate:<pre>'.print_r($diplomate,true).'</pre>');
        print('Sentinelle:<pre>'.print_r($sentinelle,true).'</pre>');
        print('Explorateur:<pre>'.print_r($explorateur,true).'</pre>');*/






        return $bigArray;
    }
}