<?php


class AddStudentController extends Framework
{

    public function AddStud(){
        $sql = new Model();
        $sql = $sql->select('technologies');
        $sql = $sql->fetchAll();

        $perso = new Model();
        $perso = $perso->select('code_personalite');
        $perso = $perso->fetchAll();



        if(isset($_POST['action'])){



            include_once FRAMEWORK_PATH.'Kernel/Model.php';
            include_once MDL_PATH.'Etudiants/Etudiants.php';
            include_once MDL_PATH.'Technologies/Technologies_Etudiants.php';



            $new_etudiant = new Etudiants();


            if(isset($_POST['prenom'])){
                $prenom = $_POST['prenom'];
            }
            if(isset($_POST['nom'])){
                $nom = $_POST['nom'];
            }
            if(isset($_POST['prenom'])){
                $prenom = $_POST['prenom'];
            }
            if(isset($_POST['personalite'])){
                $personalite = $_POST['personalite'];
            }
            if(isset($_POST['technologies'])){
                $technologies = $_POST['technologies'];
            }
            if(isset($_POST['note'])){
                $note = $_POST['note'];
            }





//              TODO: faire fonctionner les getters and setters
//
//            $new_etudiant->setNom($nom);
//            $new_etudiant->setPrenom($prenom);
//            $new_etudiant->setClasse("1");
//            $new_etudiant->setCodePersonaliteIdcodePersonalite($personalite);
//
//            $new_note = new Technologies_Etudiants();
//            $new_note->setEtudiantIdetudiant($new_etudiant->getId());
//            $new_note->setTechnologiesIdtechnologies($technologies);
//            $new_note->setNote($note);


            $db = new Model();
            $classe= $db->select('classe', "WHERE idclasse = 1" )->fetch();
            $db->insert('etudiant','nom',"'$nom'");
            $db->insert('etudiant','prenom',"'$prenom'");
            $db->insert('etudiant','classe_idclasse',$classe);
            $db->insert('etudiant','code_personalite_idcode_personalite',"$personalite");
            foreach ($technologies as $technology){
                $db->insert('technologies_has_etudiant','technologies_idtechnologies',"$technology");
                $db->insert('technologies_has_etudiant','etudiant_idetudiant',"$new_etudiant->getId()");
                $db->insert('technologies_has_etudiant', 'note',"0");
            }

        }




        $this->render('formulaire', ['sql' => $sql, 'perso' => $perso]);
    }

}
