<?php


class GroupeController extends Framework
{
    public function test() {
        include MDL_PATH.'Groupes/Groupes.php';
        $data = new Groupes();
        $result = $data->nbrGroupe();

        $this->render('nbrGroupe',['result'=>$result]);
    }

}