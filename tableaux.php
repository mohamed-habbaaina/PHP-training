<?php 
$eleve = [
    'nom' => 'marc',
    'prenom' => 'lucky',
    'classe' => '2AS',
    'notes' => [12, 16, 17, 13, 18]
];
$eleve ['nom'] = 'jack';
$eleve ['notes'][] = 30;
print_r($eleve);
// print_r($eleve['notes']);