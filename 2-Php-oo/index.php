<?php

use Classes\Ecole;
use Classes\Classe;
use Classes\Eleve;
require_once './Classes/Ecole.php';
require_once './Classes/Classe.php';
require_once './Classes/Eleve.php';

echo '<h2>Création des écoles</h2>';

$ecole = new Ecole('Les prévoyants', '18 Av...', 100, 'Jean DUPONT');
var_dump($ecole);

/*
$ecole->nom = 'Les prévoyants';
$ecole->adresse = '18 Av...';
$ecole->effectif = 100;
$ecole->directeur = 'Jean DUPONT';
var_dump($ecole);
*/

/*
$ecole->setNom('Les prévoyants');
$ecole->setAdresse('18 Av...');
$ecole->setEffectif(100);
$ecole->setDirecteur('Jean DUPONT');
var_dump($ecole);
*/

$ecole2 = new Ecole('Ecole 52', '10 Rue...', 500);
$ecole2->setDirecteur('Pierre MARTIN');
var_dump($ecole2);

echo('Ecole 1 = ' . $ecole->getNom() . ' - Ecole 2 = ' . $ecole2->getNom());

echo '<h2>Création des classes</h2>';

$front = new Classe('Front-End', '1', 'Pierre DURAND', 15, 'Bat1-et1');
$back = new Classe('Back-End', '2', 'Julie MORIN', 20, 'Bat2-et3');
$full = new Classe('Fullstack', '3', 'Clément DUBOIS', 25, 'Bat1-et5');

var_dump($front);
var_dump($back);
var_dump($full);

echo '<h2>Création des élèves</h2>';

$apprenant1 = new Eleve('Sophie', 'RAMI', 32);
$apprenant2 = new Eleve('Pierre', 'REYNAUD', 20);
$apprenant3 = new Eleve('Fred', 'TIRON', 33);
$apprenant4 = new Eleve('Catherine', 'MANJA', 35);
$apprenant5 = new Eleve('Bruno', 'DIKA', 26);
$apprenant6 = new Eleve('John', 'DOE', 35);

var_dump($apprenant1);
var_dump($apprenant2);
var_dump($apprenant3);
var_dump($apprenant4);
var_dump($apprenant5);
var_dump($apprenant6);

echo '<h2>Affectation des élèves dans des classes</h2>';

$full->addEleve($apprenant1);
$back->addEleve($apprenant2);
$front->addEleve($apprenant3);
$back->addEleve($apprenant4);
$front->addEleve($apprenant5);
$full->addEleve($apprenant6);

var_dump($front);
var_dump($back);
var_dump($full);

echo '<h2>Affectation des classes dans des écoles</h2>';

$ecole->addClass($front);
$ecole->addClass($back);
$ecole2->addClass($full);

var_dump($ecole);
var_dump($ecole2);
var_dump($ecole2->getClasses()[0]->getEleves()[1]->getNom());

echo '<h2>Affectation d\'une classe à un élève</h2>';
var_dump($apprenant1);
var_dump($apprenant1->getClasse());
?>

<hr>
<h1>Affichage du détail d'une école</h1>

<!-- Afficher le nom de l'école -->
<h2>Nom de l'école : <?= $ecole->getNom(); ?></h2>

<!-- Afficher la liste des classes de l'école -->
<?php $classes = $ecole->getClasses(); ?>

<h2>Liste des classes de l'école :</h2>
<ol>
<?php foreach ($classes as $classe) { ?>
    <li><?= $classe->getNom() ?> : <?= $classe->getEffectif() ?>
        <ul>
            <?php foreach ($classe->getEleves() as $eleve) { ?>
                <li><?= $eleve->getNom() ?> <?= $eleve->getPrenom() ?></li>
            <?php } ?>
        </ul>
    </li>
<?php } ?>
</ol>