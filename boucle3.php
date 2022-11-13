<?php 

//script qui demande un un utilisateur de rentré un interval d'heure, et en suite il verifier esq la magasin est ouvert 
$heures =[];
$etree = null;
while (true){
    $entree = readline('entrée l\'heure d\ouverture, puis l\'heure de ferméture, qund vous terminé entrée (fin): ');
    if ($entree == 'fin'){
        break;
    } else {
        $heures [] = $entree;
    }
}
if ($heures[0] > $heures[1]) {
    $heures = array_reverse($heures);
}
// la deuxième partie
$heure = readline('entrée votre heure d\arrivé: ');
if ($heure > $heures[0] && $heure < $heures[1]) {
    echo 'le magasin sera ouvert';
} else {
    echo "Le magasin sera fermé \n";
}