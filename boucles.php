<?php 
$eleves = [
    'cm1' => ['marc', 'jack', 'marion', 'adel'],
    'cm2' => ['lucky', 'gabriel', 'sandrine', 'mary', 'leila']
];
    foreach ($eleves as $classe => $listeleve) {
        echo "$classe:\n";
        foreach ($listeleve as $eleve) {
            echo "- $eleve \n";
        }
}
