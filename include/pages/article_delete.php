<?php
$id= isset($_GET['id']) ? (int)$_GET['id'] : 0; 
echo "ID:$id";
?>
<?php
//	echo $id."<br/>";
?>
<?php
	$sql=	"SELECT * FROM article WHERE id=" . $id;
	$statement=	$db->query( $sql );
	if($article=	$statement->fetch()) {
?>

		<h2>Suppression d'un aticle</h2>
		<article id="<?php echo $article['id']; ?>">
		<h1><?php echo $article['title']; ?></h1>
		<p><?php echo nl2br($article['content']); ?></p>
		</article>

<?php		//delete in dB
		$sql=	"DELETE FROM article WHERE id=:id";
		$statement=	$db->prepare($sql);
		$statement->bindParam(":id", $id);
		$result=	$statement->execute();
		echo "Article supprimé.";
?>		
	<?php
	} else {
		echo '<h3>Aucun article trouvé.</h3><br/>';
	}
?>
		<a href="index.php?page=article_liste">Retour aux articles</a>