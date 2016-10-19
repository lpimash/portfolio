<?php
require('init_front_app.php');

// La page d'accueil
function accueilPage($templates){
    
    echo $templates->render('pages/accueil');
    
} // Fin page Accueil

function testPage($templates){

    echo $templates->render('pages/test', ['name' => 'Olivier']);
    
}
