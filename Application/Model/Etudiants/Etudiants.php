<?php
/**
 * Created by PhpStorm.
 * User: WEBENOO
 * Date: 17/09/2019
 * Time: 15:56
 */

class Etudiants
{
    private $id;

    /**
     * @param mixed $id
     * @return Etudiants
     */
    public function setId($id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    public $nom;
    public $prenom;
    public $classe;
    public $code_personalite_idcode_personalite;
    public $code_personalite_code_personalite_idcode_personalite;

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     * @return Etudiants
     */
    public function setNom($nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     * @return Etudiants
     */
    public function setPrenom($prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * @param mixed $classe
     * @return Etudiants
     */
    public function setClasse($classe): self
    {
        $this->classe = $classe;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodePersonaliteIdcodePersonalite()
    {
        return $this->code_personalite_idcode_personalite;
    }

    /**
     * @param mixed $code_personalite_idcode_personalite
     * @return Etudiants
     */
    public function setCodePersonaliteIdcodePersonalite($code_personalite_idcode_personalite): self
    {
        $this->code_personalite_idcode_personalite = $code_personalite_idcode_personalite;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodePersonaliteCodePersonaliteIdcodePersonalite()
    {
        return $this->code_personalite_code_personalite_idcode_personalite;
    }

    /**
     * @param mixed $code_personalite_code_personalite_idcode_personalite
     * @return Etudiants
     */
    public function setCodePersonaliteCodePersonaliteIdcodePersonalite($code_personalite_code_personalite_idcode_personalite): self
    {
        $this->code_personalite_code_personalite_idcode_personalite = $code_personalite_code_personalite_idcode_personalite;
        return $this;
    }

    public function populating(){
        $db = new Model();

        $fName = [
            [
                'fname'=> 'John',
                'name'=>'Smith'
            ],
            [
                'fname'=> 'Marc',
                'name'=>'Doe'
            ],
            [
                'fname'=> 'Jane',
                'name'=>'Jameson'
            ]
        ];

        $code = [
            [
                'code'=> 'INTJ-A/INTJ-T'
            ],
            [
                'code'=> 'INTP-A/INTP-T'
            ],
            [
                'code'=> 'ENTJ-A/ENTJ-T'
            ],
            [
                'code'=> 'ENTP-A/ENTP-T'
            ],
            [
                'code'=> 'INFJ-A/INFJ-T'
            ],
            [
                'code'=> 'INFP-A/INFP-T'
            ],
            [
                'code'=> 'ENFJ-A/ENFJ-T'
            ],
            [
                'code'=> 'ENFP-A/ENFP-T'
            ],
            [
                'code'=> 'ISTJ-A/ISTJ-T'
            ],
            [
                'code'=> 'ISFJ-A/ISFJ-T'
            ],
            [
                'code'=> 'ESTJ-A/ESTJ-T'
            ],
            [
                'code'=> 'ESFJ-A/ESFJ-T'
            ],
            [
                'code'=> 'ISTP-A/ISTP-T'
            ],
            [
                'code'=> 'ISFP-A/ISFP-T'
            ],
            [
                'code'=> 'ESTP-A/ESTP-T'
            ],
            [
                'code'=> 'ESFP-A/ESFP-T'
            ]
        ];




        //$db->insert('professeur','idprofesseur, nom, prenom','NULL, \'Marcus\', \'Fields\' ');
        //  $db->insert('classe','idclasse, nom_classe, professeur_idprofesseur','NULL,\'3BCI\',1');
        foreach ($code as $personalities){
            $codePerso = $personalities['code'];
            //    $db->insert('code_personalite','idcode_personalite, code_personalite, code_personalite_idcode_personalite',"NULL, '$codePerso ',NULL");

        }

        foreach ($fName as $student){
            $fname = $student['fname'];
            $name = $student['name'];
            //  $db->insert('etudiant','idetudiant, nom, prenom, classe_idclasse, code_personalite_idcode_personalite, code_personalite_code_personalite_idcode_personalite, moyenne_back, moyenne_front',"NULL,'$name','$fname','1','1','0',".rand(0,10).','.rand(0,10).'');
        }


    }






}