<?php
class Auteur{
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateNaissance;
    private array $_livres ;

    public function __construct(string $nom, string $prenom, string $dateNaissance){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = new DateTime($dateNaissance);
        $this->_livres = [];
    }

    public function getNom(){
        return $this->_nom;
    }

    public function setNom($nom){
        $this->_nom = $nom;
    }

    public function getPrenom(){
        return $this->_prenom;
    }

    public function setPrenom(){
        return $this->_prenom = $prenom;
    }

    public function __toString(){
        return $this->_nom.' '.$this->_prenom.' '.$this->_dateNaissance->format('d-m-Y');
    }

    // On crée une fonction personalisée pour ajouter le livre construit dans le tableau de livres de l'auteur

    public function ajouterLivre(Livre $livre){

        array_push($this->_livres, $livre);

        // $this->_livres[] = $livre



        // je fais array push le livre en argument dans le tableau de livre de l'auteur
    }

    // faire une fonction pour afficher la bibiliographie de l'auteur

    public function afficherBibliographie(){
        foreach ($this->_livres as $livre){
            return $livre;
        }
    }
}
?>