<?php

class Page extends Article
{

    public $url;

    public function __construct($titre, $contenu, $datePublication, $url)
    {

        parent::__construct($titre, $contenu, $datePublication);

        $this->url = $url;
    }

    public function info() {
        echo "Le titre de cette page est \" $this->titre \"<br>  Son contenu est \"$this->contenu\"<br> Date de publication est \"$this->datePublication\"<br>  Son lien url est \"$this->url\"";
    }
}
