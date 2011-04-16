<h1>Id = <?php echo $id ?></h1>
<p>
<?php readfile('posts/'.$id) ?>
</p>
<p><a href="?id=<?php echo $id ?>&action=edit">Modifica questo articolo</a></p>
<hr />
<p><a href="?action=list">Elenco post</a></p>
