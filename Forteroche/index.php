<?php
// Contrôleur frontal : instancie un routeur pour traiter la requête entrante
require 'Framework/autoload.php';

use \Framework\Routeur;

//require 'Framework/Routeur.php';
$routeur = new Routeur();
$routeur->routerRequete();