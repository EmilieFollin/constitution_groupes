<?php


class Technologies_Etudiants
{
    private $technologies_idtechnologies;
    private $etudiant_idetudiant;
    private $note;

    /**
     * @return mixed
     */
    public function getEtudiantIdetudiant()
    {
        return $this->etudiant_idetudiant;
    }

    /**
     * @param mixed $etudiant_idetudiant
     */
    public function setEtudiantIdetudiant($etudiant_idetudiant): void
    {
        $this->etudiant_idetudiant = $etudiant_idetudiant;
    }

    /**
     * @return mixed
     */
    public function getTechnologiesIdtechnologies()
    {
        return $this->technologies_idtechnologies;
    }

    /**
     * @param mixed $technologies_idtechnologies
     */
    public function setTechnologiesIdtechnologies($technologies_idtechnologies): void
    {
        $this->technologies_idtechnologies = $technologies_idtechnologies;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note): void
    {
        $this->note = $note;
    }


}
