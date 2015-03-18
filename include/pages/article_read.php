<?php
$id= isset($_GET['id']) ? (int)$_GET['id'] : 0; 
?>
<?php
//	echo $id."<br/>";
?>
<?php
	$sql=	"SELECT * FROM article WHERE id=" . $id;
//	echo $sql."<br/>";
	$statement=	$db->query( $sql );
//	print_r( $statement ); echo "<br/>";
	if($article=	$statement->fetch()) {
//	echo empty($article);
//	echo "<pre>";print_r($article); echo "<br/>";echo "</pre>";
?>

		<h2>Lecture d'un aticle</h2>
		<article id="<?php echo $article['id']; ?>">
		<h1><?php echo $article['title']; ?></h1>
		<p><?php echo nl2br($article['content']); ?></p>
		</article>

	<?php
	} else {
		echo '<h3>Aucun article trouvé.</h3><br/>';
	}