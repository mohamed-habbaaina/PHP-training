<?php 
// tableau qui contien l'enssemble des notes , affichage de tableau a la fin
$notes = [];
while (true) {
    $saisi = readline('Entrez une note, sinon (fin): ');
    if ($saisi === 'fin'){
        break;
    } else {
        $notes[] = $saisi;
    }
}
    foreach($notes as $note){
        echo "- $note \n";
    }
