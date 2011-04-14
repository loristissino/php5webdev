<?php

  require_once('../lib/useful_functions.php');

  const POSTS_DIR='posts';

  $posts=scandir(POSTS_DIR); // leggo la directory dei post
  //print_r($posts); // visualizzo l'elenco
  
  $realposts=array_filter($posts, 'nothidden');
  
  //print_r($realposts); // visualizzo l'elenco
  
  
  if (array_key_exists('id', $_GET))  // recupero l'id del post che l'utente desidera 
    {
     $id=$_GET['id'];
    }
  else
    {
     $id='';
    }
    
  //print_r($realposts);
  if (!in_array($id, $realposts))
  {
    $id='';
  }

  //print_r($realposts);
  
?>
<html lang="it">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
</head>
<body>
<?php if($id): ?>
<h1>Id = <?php echo $id ?></h1>
<p>
<?php readfile('posts/'.$id) ?>
</p>
<hr />
<p><a href="?">Elenco post</a></p>
<?php else: ?>
<h1>Elenco post</h1>
<ul>
<?php foreach($realposts as $post): ?>
  <li><a href="?id=<?php echo $post ?>"><?php echo $post ?></a></li>
<?php endforeach ?>
</ul>
<?php endif ?>

