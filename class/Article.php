<?php

class Article
{

    private ?string $titre;
    private ?string $contenu;
    private ?string $datePublication;

    //  = NULL donnera la valeur par défaut NULL si aucune valeur est déclarée
    public function __construct($t = NULL, $c = NULL, $p = NULL)
    {
        // echo "J'ai reçu : $t, $c, $p";

        $this->titre = $t;
        $this->contenu = $c;
        $this->datePublication=$p;

    }

    public function info() {

        setlocale(LC_TIME, ['fr','fra','fr_FR']); 
        date_default_timezone_set('Europe/Paris');
        // va afficher la date du jour A REGLER
        $date = utf8_encode(strftime('%A %d %B %Y'));

        echo "<article>
        <h2>$this->titre</h2>
        <p>$this->contenu</p>
        <p>Paru le <time datetime=\"$this->datePublication\">$date</time></p>
        </article>";
    }

    /**
     * Get the value of datePublication
     */ 
    public function getDatePublication()
    {
        return $this->datePublication;
    }

    /**
     * Set the value of datePublication
     *
     * @return  self
     */ 
    public function setDatePublication($datePublication)
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    /**
     * Get the value of contenu
     */ 
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set the value of contenu
     *
     * @return  self
     */ 
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }
}
