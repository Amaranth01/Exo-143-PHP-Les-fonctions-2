<?php

function typeHint(bool $monBool) {
    if (is_bool($monBool)) {
        echo "C'est un booleen";
    }

}
typeHint(true);

echo"<br><br>";

$monTexte = "Salut";
function carac($monTexte) {
    echo $monTexte;
}

carac($monTexte);

echo "<br><br>";

$texte1 = "Salutations ";
$texte2 = "ma petite biche";

function concact($texte1, $texte2) {
    echo $texte1 . $texte2;
}

concact($texte1, $texte2);
echo "<br><br>";

$number1 = 42;
$number2 = 3;
function number($number1, $number2) {
    if ($number1 > $number2) {
        echo "nombre 1 est plus grand que nombre 2";
    }
    elseif ($number1 < $number2) {
        echo "nombre 1 est plus petit que nombre 2";
    }
    else {
        echo "Les deux nombres sont identiques";
    }
}
number($number1, $number2);

echo "<br><br>";

$chaine = "un texte random avec un nombre de valeur ";
$nombre = 8;
function concat ($chaine, $nombre) {
    echo $chaine . $nombre;
}
concat($chaine, $nombre);

echo "<br><br>";

$nom = "Petrisot";
$prenom = "Ayana";
$age = 2;
function person ($nom, $prenom, $age) {
    echo "Bonjour " . $nom . " " . $prenom . " tu as " . $age . "ans";
}
person($nom, $prenom, $age);

echo "<br><br>";

$age2 = 32;
$genre = "Homme";

function descritpion ($age2, $genre) {
    if ($age2 > 18 && $genre ==="Homme") {
        echo "Vous êtes un homme et vous êtes majeur";
    }
    elseif ($age2 < 18 && $genre ==="Homme") {
        echo "Vous êtes un homme et vous êtes mineur";
    }
    elseif ($age2 > 18 && $genre ==="Femme") {
        echo "Vous êtes une femme et vous êtes majeur";
    }
    elseif ($age2 < 18 && $genre ==="Femme") {
        echo "Vous êtes une femme et vous êtes mineur";
    }
}

descritpion($age2, $genre);

echo "<br><br>";

$nombre2 = 5;
$nombre3 = 654;
$nombre4 = 321;

function addition($nombre2, $nombre3, $nombre4) {
    echo $nombre2+$nombre3+$nombre4;
}
addition($nombre2, $nombre3, $nombre4);