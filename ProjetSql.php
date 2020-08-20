<?php
class ProjetSql{
    public $IdProjet_Projet;
    public $NomProjet_Projet;
    public function __construct($datas=[]){
        if ($this->isValid($datas)){
            foreach ($datas as $index=>$data){
                $method='set'.ucfirst($index);
                    if (method_exists($this, $method )){
                        $this->$method($data);
                    }
            }
        }
    }

    public function isValid(array $datas){
        if (empty($datas))
        {

        } else{
            return true;
        }
    }
    public function getIdProjet_Projet() {
        return $this->IdProjet_Projet;
    }
    public function setIdProjet_Projet(string $IdProjet_Projet) {
        $this->IdProjet_Projet = $IdProjet_Projet;
        return $this;

    }
    public function getNomProjet_Projet(){
        return $this->NomProjet_Projet;

    }
    public function setNomProjet_Projet(string $NomProjet_Projet) {
        $this->NomProjet_Projet = $NomProjet_Projet;
        return $this;
    }
}


?>