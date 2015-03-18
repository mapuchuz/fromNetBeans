 <?php
addMessage(1, 'info', 'Bonjour!');

$uploaddir = 'include/images/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
	addMessage(1,'warnning','Le fichier est valide, et a été téléchargé avec succès.' );
	addMessage(666,'info', $uploadfile );
} else {   
	addMessage(13,'erreur', 'Vous pourrez ajouter votre photo.');
}

header('Location: index.php?page=register');

