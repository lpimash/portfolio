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
