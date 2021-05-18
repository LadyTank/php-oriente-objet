<?php
//  - 1- création d'une fonction pour "var_dump" et "print-r" dans une variable 

function jevar_dump($mavariable)
{
    echo "<br><small class=\"bg-warning text-white\">... var_dump </small><pre class=\"alert alert-warning w-75\">";
    var_dump($mavariable);
    echo "</pre>";
}
function jeprint_r($mavariable)
{
    echo "<br><small class=\"bg-danger text-white\">... print_r </small><pre class=\"alert alert-danger w-75\">";
    print_r($mavariable);
    echo "</pre>";
}
