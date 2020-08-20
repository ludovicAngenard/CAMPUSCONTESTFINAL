<?php
class utilisateurSql{
    public $nom;
    public $prénom;
    public $mdp;

    public function __construct($datas=[])
    {
       var_dump($datas);
        // TODO : Hydrate the object
        if ($this->isValid($datas))
        {
            foreach ($datas as $index=>$data)
            {
                $method='set'.$index;
                if (method_exists($this, $method ))
                {
                    $this->$method($data);
                }
            }
        }


        }
    public function isValid(array $datas)
    {

    }

    public function getNom_Utilisateur() {
        return $this->nom;
    }
    public function setNom_Utilisateur(string $nom) {
        $this->nom = $nom;
        return $this;
    }
    public function getPrenom_Utilisateur() {
        return $this->prénom;
    }
    public function setPrenom_Utilisateur(string $prénom) {
        $this->prénom = $prénom;
        return $this;
    }
    public function getEmail_Utilisateur() {
        return $this->mdp;
    }
    public function setEmail_Utilisateur(string $mdp) {
        $this->mdp = $mdp;
        return $this;
    }
}


?>