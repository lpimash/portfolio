<?php
// Autoloading des namespaces depuis le dossier "Composants"
require __DIR__ . DIRECTORY_SEPARATOR . 'autoloading.php';

// Initialisation templates php
$templates = new League\Plates\Engine(__DIR__ . DIRECTORY_SEPARATOR . 'templates');

// Affiche de beaux messages d'erreurs
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

// Connexion à la base de donnée
$db = new PDO('mysql:host=127.0.0.1;dbname=c9;port=3306;charset=utf8', 'o_revollat', '');

/* 
   ========================================================================================
    Les routes (URL) possibles et quel fonction correspondante doit etre executée.
    Par exemple pour '/test' => 'essai' traduit le fait que si on accéde à l'URL
    http://portfolio.mondomaine.net/test alors c'est la fonction essaiPage() qui sera appelée.
    on construit le nom de cette fonction en prenant la valeur associée dans le tableau (ici 'essai') 
    en y collant 'Page' ainsi on appelle la fonction essaiPage()
   ======================================================================================== 
*/
$urlMap = [
    '/'             => 'accueil',
    '/oliv'         => 'test',
    '/realisations' => 'realisations',
    '/realisation'  => 'realisation'
];

$url = parse_url($_SERVER['REQUEST_URI']);
$path = $url['path'];
 
if (isset($urlMap[$path])) {  // On construit la fonction à appeler.
    
    $menu = $urlMap[$path];
    $fonction_a_appeler = $menu . 'Page'; // exemple "accueil" . "Page" => appelera la fonction accueilPage()
    
    if(function_exists($fonction_a_appeler)){
        
        call_user_func($fonction_a_appeler, [ // On appelle (execute) la fonction
            'templates'     => $templates,    // On lui passe le système de template,
            'db'           => $db,           // la base de donnée,
            'menu_courant'  => $menu          // et le menu courant
        ]);
        
    }else{
        throw new Exception("la fonction $fonction_a_appeler n'est pas définie.");
    }
    
} else {                      // La page n'existe pas, on renvoi une erreur 404

    header("HTTP/1.0 404 Not Found");
    echo $templates->render('pages/404');
    
}
