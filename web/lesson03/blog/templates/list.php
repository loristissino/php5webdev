<h1>Elenco post</h1>
<ul>
<?php foreach($realposts as $post): ?>
  <li><a href="?id=<?php echo $post ?>&action=view"><?php echo $post ?></a></li>
<?php endforeach ?>
</ul>
