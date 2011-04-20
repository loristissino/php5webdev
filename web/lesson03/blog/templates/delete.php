<h1>Id = <?php echo $id ?></h1>
<?php readfile('posts/'. $id) ?>
<p><em>Confermi eliminazione?</em></p>
<form action="?id=<?php echo $id ?>&action=delete" method="post">
<input type="submit" name="confirm" value="Elimina articolo" />
</form>
<hr />
<p><a href="?action=view&id=<?php echo $id ?>">Modifica articolo</a></p>