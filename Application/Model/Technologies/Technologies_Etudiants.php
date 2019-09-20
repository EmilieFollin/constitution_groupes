<?php
/**
 * Created by PhpStorm.
 * User: WEBENOO
 * Date: 18/09/2019
 * Time: 14:51
 */

class Technologies_Etudiants
{
    private $technologies_idtechnologies;
    private $etudiant_idetudiant;
    private $note;

    /**
     * @return mixed
     */
    public function getTechnologies_idtechnologies()
    {
        return $this->technologies_idtechnologies;
    }

    /**
     * @param mixed $technologies_idtechnologies
     * @return Technologies_Etudiants
     */
    public function setTechnologies_idtechnologies($technologies_idtechnologies): self
    {
        $this->technologies_idtechnologies = $technologies_idtechnologies;
        return $this;
    }

//---------------------------------------------------------------------------------------------------------

    /**
     * @return mixed
     */
    public function getEtudiant_idetudiant()
    {
        return $this->etudiant_idetudiant;
    }

    /**
     * @param mixed $etudiant_idetudiant
     * @return Technologies_Etudiants
     */
    public function setEtudiant_idetudiant($etudiant_idetudiant): self
    {
        $this->etudiant_idetudiant = $etudiant_idetudiant;
        return $this;
    }

//---------------------------------------------------------------------------------------------------------

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     * @return Technologies_Etudiants
     */
    public function setNote($note): self
    {
        $this->note = $note;
        return $this;
    }

//---------------------------------------------------------------------------------------------------------

}