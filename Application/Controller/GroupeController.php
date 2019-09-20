<?php


class GroupeController extends Framework
{
    public function index() {
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
        print('<pre>'.print_r($reponse,true).'</pre>');




        $this->render('eleves',['leader'=>$leader,'nbrLeader'=>$nbrLeader,'a'=>$a]);
    }

    public function test() {
        include MDL_PATH.'Groupes/Groupes.php';
        $data = new Groupes();
        $result = $data->nbrGroupe();

        $this->render('accueil',['result'=>$result]);

    }

}