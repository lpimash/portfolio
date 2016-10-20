<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title><?=$this->e($title)?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

  <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Portfolio</a>
      </div>
      
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?php if($menu == 'accueil') echo "active" ?>"><a href="/">Accueil</a></li>
        <li class="<?php if($menu == 'test') echo "active" ?>"><a href="/oliv">Test</a></li>
        <li class="<?php if($menu == 'realisations') echo "active" ?>"><a href="/realisations">Réalisations</a></li>
      </ul>
    </div>
      
    </div>
  </nav>

  <div class="container">
  
    <div class="row">
      <div class="col-md-12">
        <?php echo $this->section('content') ?>
      </div>
    </div>
  
    <hr>
  
    <footer>
      <p>&copy; 2017</p>
    </footer>

  </div> <!-- /container -->        

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
</body>
</html>
