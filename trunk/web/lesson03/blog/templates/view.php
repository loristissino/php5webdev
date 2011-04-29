<h1>Id = <?php echo $id ?></h1>
<p>
<?php readfile('posts/'.$id) ?>
</p>
<p><a href="?id=<?php echo $id ?>&action=edit">Modifica questo articolo</a>
<p><a href="?id=<?php echo $id ?>&action=delete">Elimina questo articolo</a> (pagina web di conferma)</p>

<?php include('templates/_linktolist.php') ?>
