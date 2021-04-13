<?php 
/**
 * Class de débug
 * @author Ladytank
 * @version 1
 */
class Debug
{
    /**
     * Méthode static de débug
     * @param any $mavariable
     * 
     */
    static function monDebug($mavariable)
    {
        echo "<br><small class=\"bg-warning text-white\">... var_dump </small><pre class=\"alert alert-warning w-75\">";
        var_dump($mavariable);
        echo "</pre>";
    }

    /**
     *  Méthode static pour afficher un tableau
     * @param array $mavariable
     * 
     */
    static function afficherTableau($mavariable)
    {
        echo "<br><small class=\"bg-danger text-white\">... print_r </small><pre class=\"alert alert-danger w-75\">";
        print_r($mavariable);
        echo "</pre>";
    }

    /**
     * Méthode static de débug avec arrêt du script
     * @param any $mavariable
     */
    static function monDebugStop($mavariable)
    {
        echo "<br><small class=\"bg-warning text-white\">... var_dump </small><pre class=\"alert alert-warning w-75\">";
        var_dump($mavariable);
        echo "</pre>";
        die();
    }

    /**
     * Méthode static pour afficher les proprétés d'un objet
     * @param object $monObjet
     */
    static function AfficherPropriete($monObjet)
    {
        echo "<br><small class=\"bg-success text-white\">... get_object_vars </small><pre class=\"alert alert-success w-75\">";
        print_r(get_object_vars($monObjet));
        echo "</pre>";

    }

}

