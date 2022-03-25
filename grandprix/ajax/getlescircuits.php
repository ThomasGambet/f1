<?php
//Connexion à la base de données
require '../../class/class.database.php';
$db = Database::getInstance();

// Définir ma requête
$sql = <<<EOD
			Select *
			from grandprix
			Group by id, grandprix.nom
EOD;

$curseur = $db->query($sql);
$lesLignes = $curseur->fetchAll(PDO::FETCH_ASSOC);
$curseur->closeCursor();

// Ajout d'une propriété logo dans $leslignes
$rep = '../circuit.image/';
$nb = count($lesLignes);
for($i = 0; $i < $nb; $i++) {
    $image = $lesLignes [$i]['circuit'] .".png";
    $lesLignes [$i]['logo'] = file_exists("$rep$image") ? $image : "defaut.jpg";
}

$rep = '../../pays/';
$nb = count($lesLignes);
for($i = 0; $i < $nb; $i++) {
    $image = $lesLignes [$i]['codePays'] .".png";
    $lesLignes [$i]['drap'] = file_exists("$rep$image") ? $image : "defaut.jpg";
}


// Envoyer le résultat au format Json
echo json_encode($lesLignes);