<?php
class AvisSql{
    public $IdAvis_AVIS;
    public $ContenuAvis_AVIS;
    public $Note_AVIS;
    public $EstVerifier_AVIS;
    public $idProjet_Projet;
    public $IdUtilisateur_Utilisateur;
    public $Nom_Utilisateur;
    public $Prenom_Utilisateur;
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
    public function getIdAvis_AVIS() {
        return $this->IdAvis_AVI;
    }
    public function setIdAvis_AVIS(string $IdAvis_AVI) {
        $this->IdAvis_AVI = $IdAvis_AVI;
        return $this;

    }
    public function getContenuAvis_AVIS(){
        return $this->ContenuAvis_AVIS;

    }
    public function setContenuAvis_AVIS(string $ContenuAvis_AVIS) {
        $this->ContenuAvis_AVIS = $ContenuAvis_AVIS;
        return $this;
    }
    public function getNote_AVIS() {
        return $this->Note_AVIS;
    }
    public function setNote_AVIS(string $Note_AVIS) {
        $this->Note_AVIS = $Note_AVIS;
        return $this;

    }
    public function getEstVerifier_AVIS(){
        return $this->EstVerifier_AVIS;

    }
    public function setEstVerifier_AVIS(string $EstVerifier_AVIS) {
        $this->EstVerifier_AVIS = $EstVerifier_AVIS;
        return $this;
    }
    public function getIdUtilisateur_Utilisateur() {
        return $this->IdUtilisateur_Utilisateur;
    }
    public function setIdUtilisateur_Utilisateur(string $IdUtilisateur_Utilisateur) {
        $this->IdUtilisateur_Utilisateur = $IdUtilisateur_Utilisateur;
        return $this;

    }
    public function getIdProjet_Projet() {
        return $this->idProjet_Projet;
    }
    public function setIdProjet_Projet(string $idProjet_Projet) {
        $this->idProjet_Projet = $idProjet_Projet;
        return $this;
    }
    public function getNom_Utilisateur() {
        return $this->Nom_Utilisateur;
    }
    public function setNom_Utilisateur(string $Nom_Utilisateur) {
        $this->Nom_Utilisateur = $Nom_Utilisateur;
        return $this;
    }
    public function getPrenom_Utilisateur() {
        return $this->Nom_Utilisateur;
    }
    public function setPrenom_Utilisateur(string $Prenom_Utilisateur) {
        $this->Prenom_Utilisateur = $Prenom_Utilisateur;
        return $this;
    }
}

?>