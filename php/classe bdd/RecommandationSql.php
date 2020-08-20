<?php
class RecommandationSql{
    public $Entreprise_Recommandation;
    public $Profession_Recommandation;
    public $ContenuRecommandation_Recommandation;
    public $EstValide_Recommandation;
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
    if (empty($datas)){
    }
    else{
        return true;
    }
}
 public function getEntreprise_Recommandation() {
     return $this->Entreprise_Recommandation;
 }
 public function setEntreprise_Recommandation(string $Entreprise_Recommandation) {
     $this->Entreprise_Recommandation = $Entreprise_Recommandation;
     return $this;
 }
 public function getProfession_Recommandation() {
     return $this->Profession_Recommandation;
 }
 public function setProfession_Recommandation(string $Profession_Recommandation) {
     $this->Profession_Recommandation = $Profession_Recommandation;
     return $this;
 }
 public function getContenuRecommandation_Recommandation() {
     return $this->ContenuRecommandation_Recommandation;
 }
 public function setContenuRecommandation_Recommandation(string $ContenuRecommandation_Recommandation) {
     $this->ContenuRecommandation_Recommandation = $ContenuRecommandation_Recommandation;
     return $this;
 }
 public function getEstValide_Recommandation() {
     return $this->EstValide_Recommandation;
 }
 public function setEstValide_Recommandation( $EstValide_Recommandation) {
     $this->EstValide_Recommandation = $EstValide_Recommandation;
     return $this;
 }
 public function getIdUtilisateur_Utilisateur() {
    return $this->IdUtilisateur_Utilisateur;
}
public function setIdUtilisateur_Utilisateur(string $IdUtilisateur_Utilisateur) {
    $this->IdUtilisateur_Utilisateur = $IdUtilisateur_Utilisateur;
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