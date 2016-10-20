<?php 
$this->layout('layout', [
    'title' => 'test', 
    'menu' => $menu
]);
?>

<h1>Test</h1>
<p>Hello, <?php echo $name; ?></p>