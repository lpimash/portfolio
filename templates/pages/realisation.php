<?php 
$this->layout('layout', [
    'title' => 'realistation - ' . $realisation['titre'], 
    'menu' => 'realisations'
]);
?>

<h1><?php echo $realisation['titre'] ?></h1>

<p>
    <?php echo $realisation['description'] ?>
</p>