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
        include MDL_PATH.'Groupes/Groupes.php';
        $groupe = new Groupes();
        $leader = $groupe->listLeader();
        $nbrLeader = count($leader);

        $a = $groupe->triGroupe();
        $a = json_encode($a);
        $client = new \GuzzleHttp\Client(["base_uri" => "https://ruby-skill-teams-filtering.knmriznm.cf/"]);
        $options = [
            'json' => $a
        ];

        $response = $client->post("/", $options);
        $reponse = json_decode($response->getBody()->getContents());
        foreach ($reponse as $groupe){
            array_pop($groupe);
        }

        $this->render('groupe',['groupe'=>$reponse]);
    }

    public function accueil(){
        $this->render('accueil',[]);
    }



}