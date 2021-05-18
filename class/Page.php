<?php

class Page extends Article
{

    private ?string $url;

    public function __construct($titre, $contenu, $datePublication, $url)
    {

        // parent::__construct($titre, $contenu, $datePublication);
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->datePublication = $datePublication;

        $this->url = $url;
    }

    public function info()
    {
        echo "<article>
        <h2>$this->titre</h2>
        <p>$this->contenu</p>
        <time datetime=\"\">$this->datePublication</time>
        <p>$this->url</p>
        </article>";
    }
}
