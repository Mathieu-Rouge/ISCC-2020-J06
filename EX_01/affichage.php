<?php

function afficher_titre ($nomproduit)
{
    echo "<h1>Fiche produit: {$nomproduit}.</h1>";
    return;
}

function afficher_description ($couleur, $prix)
{
    echo"<p>Couleur: {$couleur}, Prix:{$prix} euros.</p>";
    return;
}

function afficher_produit ($nomproduit, $couleur, $prix, $disponble)
{
    if ($disponible==true){
        afficher_titre($nomproduit);
        afficher_description($couleur,$prix);
    }
    else
    echo "<p>Le produit {$nomproduit} n'est malheureusement plus disponible.</p>";
    return ;
}

?>
