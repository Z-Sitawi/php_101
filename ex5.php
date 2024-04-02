<?php
function ecrire_bonjour(){
    echo "Bonjour!\n";
}

function compare2nb($nb1, $nb2){
    if ($nb1 > $nb2)
        echo "$nb1 est plus grand que $nb2\n";
    elseif ($nb2 > $nb1)
        echo "$nb2 est plus grand que $nb1\n";
    else
        echo "$nb1 = $nb2\n";
}

function ajouteMAJ($ch1, $ch2, $ch3){
    return strtoupper("$ch1 $ch2 $ch3\n");
}


?>

<?php
for ($i = 1; $i < 11; $i++){
    echo "$i ";
    ecrire_bonjour();
}
compare2nb(5, 3);
echo ajouteMAJ("hi", "zak", "!");
echo "\n"
?>