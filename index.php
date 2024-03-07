<h1>POO Entreprise</h1>

<?php


spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});
// PHP Intelephense : reconnait les classes d'un fichier à l'autre

$elanFormation = new Entreprise("ELAN FORMATION", "1993-01-01","14 rue du Rhône ", "67100", "strasbourg");
echo $elanFormation->getRaisonSociale();

//var_dump($elanFormation); //renvoie toutes les information des parametres concernant mon entreprise qur j'ai cree 

echo "<br>".$elanFormation->getRaisonSociale()." a été crée le ".$elanFormation->getDateCreation()->format(".d.m.Y").
" et se situe à l'adresse suivante ".$elanFormation->getAdresse()." ";