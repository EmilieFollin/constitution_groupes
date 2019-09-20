<?php
/**
 * Created by PhpStorm.
 * User: WEBENOO
 * Date: 17/09/2019
 * Time: 13:58
 */

class IndexController extends Framework
{
    public function index(){
        include_once MDL_PATH.'Etudiants/Etudiants.php';
        $etudiant = new Etudiants();
     //   $student = $etudiant->getInstanceOf();
     //   var_dump($student);

        $this->render('groupe',[]);
    }

    public function accueil(){
        $this->render('accueil',[]);
    }



}