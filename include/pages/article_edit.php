<?php
// id sur barre adresse
$id= isset($_GET['id']) ? (int)$_GET['id'] : 0; 
// si bouton du form cliqué
if( isset($_POST['submit'])) {
	$nouveau= (isset($_GET['id'])&&(int)$_GET['id']>0) ? 0 : 1;  

	if($nouveau==0) {	
		//maj dans dB
		$sql=	"UPDATE article SET title=:title, content=:content WHERE id=" . $id;
	} else { 
		//new in dB
		$sql=	"INSERT INTO article(title, content) VALUES (:title, :content)";
	}

	$statement=	$db->prepare($sql);
	$statement->bindParam(":title", $_POST['title']);
	$statement->bindParam(":content", $_POST['content']);
	$result=	$statement->execute();
}
?>

<?php
	$sql=	"SELECT * FROM article WHERE id=" . $id;
	$statement=	$db->query( $sql );
	if($article=	$statement->fetch()) {
?>

<?php
	} else {
		echo '<h3>Aucun article trouvé.</h3><br/>';
	}?>

	<form method="post" action="index.php?page=article_edit&id=<?php echo $id ?>" enctype="multipart/form-data"	>
	 <fieldset>
		<h2>Formulaire de modifications</h2>
		<p><input type="text" name="title" value="<?php echo $article['title']; ?>" /></p>
		<p><textarea name="content"  rows="10" cols="50"><?php echo $article['content']; ?></textarea></p>
		<p><input type="submit" name="submit"	value=" Envoyer "></p>
	 </fieldset>
 	</form>	

	<a href="index.php?page=article_liste">Retour aux articles</a>

