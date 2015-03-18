<?php
function addMessage($code,$type,$lib) {
	$_SESSION['messages'][]= array($code,$type,$lib);
}

function afficheMessage() {
	if (isset($_SESSION['messages'])) {
		 foreach($_SESSION['messages'] as $vale ) {
			 echo " ---> " . $vale[2] . "<br/>";
		 }
		 
		 foreach($_SESSION['messages'] as $vale ) {
			if( $vale[0]==666) {
				echo "<img src=" . "\"" . $vale[2]  . "\"" . " height='200' width='300'"  ."/>";
		 }}
	}
} 
 
 
?>