<?php 
$this->layout('layout', [
    'title' => 'Les réalisations', 
    'menu' => $menu
]);
?>

<h1>Les réalisations</h1>

<ul>
    
    <?php foreach ($realisations as $r) : ?>
    
    <li>
        <a href="/realisation?id=<?php echo $r['id'] ?>">
            <?php echo $r['titre'] ?>
        </a>
    </li>
    
    <?php endforeach; ?>
    
</ul>