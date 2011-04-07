<pre>
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
  }
  
  //print_r($realposts);
  
?>
</pre>
<h1>Elenco post</h1>
<ul>
<?php foreach($realposts as $post): ?>
  <li><?php echo $post ?></li>
<?php endforeach ?>
</ul>

<h1>Elenco post</h1>
<ul>
<?php 
foreach($realposts as $post)
{
  echo "<li>$post</li>";
}
?>
</ul>
<h1>Elenco post</h1>
<ul>
<?php 
foreach($realposts as $post)
{
  echo "<li>$post</li>";
}
?>
</ul>


