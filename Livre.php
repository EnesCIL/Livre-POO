
<?php
class Livre{
    private string $_nomLivre;
    private int  $_anneeLivre;
    private int $_nbPage;
    private float $_prix;
    private Auteur $_auteur;


    public function __construct($nomLivre, $anneeLivre, $nbPage, $prix, $auteur){
        $this->_nomLivre = $nomLivre;
        $this->_anneeLivre = $anneeLivre;
        $this->_nbPage = $nbPage;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
        //auteur mis dans ajouterlivre en prenant le $this qui faut 
        $auteur->ajouterLivre($this);
    }

    public function getNomLivre() {
        return $this->_nomLivre;
    }

    public function setNomLivre($nomLivre) {
        $this->_nomLivre = $nomLivre;
    }

    public function getAnneeLivre() {
        return $this->_anneeLivre;
    }

    public function setAnneeLivre($anneeLivre) {
        $this->_anneeLivre = $anneeLivre;
    }
    public function getNbPage() {
        return $this->_nbPage;
    }

    public function setNbPage($nbPage) {
        $this->_nbPage = $nbPage;
    }    

    public function getPrix() {
        return $this->_prix;
    }

    public function setPrix($prix) {
        $this->_prix = $prix;
    }

    public function getAuteur(){
        return $this->_auteur;
    }
    public function setAuteur($auteur) {
        $this->_auteur = $auteur;
    }


    public function __toString(){
        return $this->_nomLivre.' '.$this->_anneeLivre.' '.$this->_nbPage.' '.$this->_prix;
    }
    
    // plusieurs compte tableau compte un compte appartient a un auteur etc lameme
}


?>