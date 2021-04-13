<?php

class Article
{

    public $titre;
    public $contenu;
    public $datePublication;

    public function __construct($titre, $contenu, $datePublication)
    {

        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->datePublication = $datePublication;

    }

    public function info() {
        echo "Le titre de cet article est \"$this->titre\" <br> Son contenu est \"$this->contenu\"<br>  Sa date de publication est \"$this->datePublication\"";
    }
}
