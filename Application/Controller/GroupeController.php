<?php


class GroupeController extends Framework
{
    public function index() {
        include MDL_PATH.'Groupes/Groupes.php';
        $groupe = new Groupes();
        $leader = $groupe->listLeader();
        $nbrLeader = count($leader);

        $a = $groupe->triGroupe();


        $this->render('eleves',['leader'=>$leader,'nbrLeader'=>$nbrLeader,'a'=>$a]);
    }

    public function test() {
        include MDL_PATH.'Groupes/Groupes.php';
        $data = new Groupes();
        $result = $data->nbrGroupe();

        $this->render('nbrGroupe',['result'=>$result]);
    }

}