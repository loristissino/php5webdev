<h1>Id = <?php echo $id ?></h1>
<p><em>Modifica</em></p>
<form action="?id=<?php echo $id ?>&action=save" method="post">
<p>Testo:</p>
<textarea name="text" cols="100" rows="20">
<?php readfile('posts/'. $id) ?>
</textarea>
<br />
<input type="submit" name="save" value="Salva" />
</form>
<hr />
<p><a href="?id=<?php echo $id ?>&action=view">Torna alla visualizzazione</a></p>

<?php include('templates/_linktolist.php') ?>
