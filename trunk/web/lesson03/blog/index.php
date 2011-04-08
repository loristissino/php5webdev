<?php

  const POSTS_DIR='posts';

  $posts=scandir(POSTS_DIR); // leggo la directory dei post
  //print_r($posts); // visualizzo l'elenco

  $realposts=array();
  foreach($posts as $post)
  {
    if (substr($post,0,1)!='.')
    {
      $realposts[]=$post;
    }
  } // creo un array $realposts che contiene l'elenco degli id che considero validi
  
  
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
<pre>
<?php readfile('posts/'.$id) ?>
</pre>
<?php else: ?>
<h1>Elenco post</h1>
<ul>
<?php foreach($realposts as $post): ?>
  <li><a href="?id=<?php echo $post ?>"><?php echo $post ?></a></li>
<?php endforeach ?>
</ul>
<?php endif ?>

