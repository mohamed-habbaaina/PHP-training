<?php 
// tableau qui contien l'enssemble des notes , affichage de tableau a la fin
$notes = [];
$saisi =null;
while ($saisi !== 'fin') {
    $saisi = readline('Entrez une note, sinon (fin): ');
    if ($saisi !== 'fin'){
        $notes[] = $saisi;
    }
}
    foreach($notes as $note){
        echo "- $note \n";
    }
