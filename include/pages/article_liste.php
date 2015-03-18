
<?php
	$sql=	"SELECT * FROM article";
	$statement=	$db->query( $sql );
	if($article=	$statement->fetchall()) {
		echo "<h2>Lecture de tous les aticles</h2>";
		foreach($article as $valeur) {

?>
		<p>
		<article class="mon_article" id="<?php echo $valeur['id']; ?>">
			<h3 class="titre_article"><?php echo $valeur['title']; ?></h3>
	<!--		<p  class="content_article"><?php echo nl2br($valeur['content']); ?></p>         -->
			<a href=index.php?page=article_edit&id=<?php echo $valeur['id']?>>Modifier</a>
			<a href=index.php?page=article_delete&id=<?php echo $valeur['id']?>>Supprime</a>
		</article>
		</p>

	<?php
	}
			echo "<a href=index.php?page=article_edit>Nouvel article</a>";
	} else {
		echo '<h3>Aucun article trouvé.</h3><br/>';
	}
?>


