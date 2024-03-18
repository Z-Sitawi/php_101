<?php
    $name = $_POST['name'];
    $lastname = $_POST['lname'];
    $age = $_POST['age'];
    $jour = $_POST['day'];

        
    switch ($jour){
        case "Landi":
            echo "Salut $name $lastname, $jour c'est <b>le premier</b> jour de la semaine.<br>";
            break;
        case "Mardi":
            echo "Salut $name $lastname, $jour c'est <b>le deuxième</b> jour de la semaine.<br>";
            break;
        case "Mercredi":
            echo "Salut $name $lastname, $jour c'est <b>le troisième</b> jour de la semaine.<br>";
            break;
        case "Jeudi":
            echo "Salut $name $lastname, $jour c'est <b>le quatrième</b> jour de la semaine.<br>";
            break;
        case "Vendredi":
            echo "Salut $name $lastname, $jour c'est <b>le cinquième</b> jour de la semaine.<br>";
            break;
        case "Samedi":
            echo "Salut $name $lastname, $jour c'est <b>le premier</b> jour de week_end.<br>";
            break;
        case "Dimanche":
            echo "Salut $name $lastname, $jour c'est <b>le deuxième</b> jour de week_end.<br>";
            break;
    }
    echo "<br>Votre age et $age<br>";
    echo ($age < 18)? "Donc l'age et invalid.": "Donc l'age et valid.";


?>