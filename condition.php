<?php 
$note = (int)readline('Entrez votre note: ');
if ($note  > 10) {
    echo'Felicitation.';
} elseif ($note  == 10) {
    echo 'vous avez juste la moyene';
} elseif ($note  < 10){
    echo 'Dommage, hard luck.';

}
else {
    echo 'je comprend pas votre reponse';
}
