<?php
require('init_front_app.php');

// La page d'accueil
function accueilPage(array $args){
    
    echo $args['templates']->render('pages/accueil', [
        'menu' => $args['menu_courant']
    ]);
    
} // Fin page Accueil

function testPage(array $args){

    echo $args['templates']->render('pages/test', [
        'menu' => $args['menu_courant'],
        'name' => 'Olivier'
    ]);
    
}

function realisationsPage(array $args){

    $sql = 'SELECT * FROM realisation';
    $statement = $args['db']->prepare($sql);
    $statement->execute();
    $realisations = $statement->fetchAll();
    
    echo $args['templates']->render('pages/realisations', [
        'menu' => $args['menu_courant'],
        'realisations' => $realisations
    ]);
    
}

function realisationPage(array $args){

    $sql = 'SELECT * FROM realisation WHERE id = :id';
    $statement = $args['db']->prepare($sql);
    $statement->bindValue(':id', (int) $_GET['id'] );
    $statement->execute();
    $realisation = $statement->fetch(); // récupère le premier enregistrement

    echo $args['templates']->render('pages/realisation', [
        'menu' => $args['menu_courant'],
        'realisation' => $realisation
    ]);
    
}

