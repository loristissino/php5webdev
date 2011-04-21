<h1>Elenco articoli</h1>
<ul>
<?php foreach($posts as $post): ?>
  <li><a href="?id=<?php echo $post ?>&action=view"><?php echo $post ?></a></li>
<?php endforeach ?>
</ul>
