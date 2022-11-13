<?php 
$choix = (int)readline("Entrez votre choix \n, 1 pour attaqué. \n 2 pour déffendre. ");
switch ($choix) {
    case 1:
        echo 'attaqué';
        break;
    case 2:
        echo 'deffendre';
        break;
    default:
        echo 'choix inconnu';
}

