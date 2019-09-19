<?php
/**
 * Created by PhpStorm.
 * User: WEBENOO
 * Date: 18/09/2019
 * Time: 10:41
 */

class GroupeController extends Framework
{
    public function index() {

        $client = new \GuzzleHttp\Client(["base_uri" => "http://httpbin.org"]);
        $options = [
            'json' => [
                ["fruit" => "apple"],
                ["legumes"=>"haricot"]
            ]
        ];
        $response = $client->post("/post", $options);
        echo $response->getBody();
        $this->render('test',["response"=> $response->getBody()]);

    }

}