<?php include 'core/init.php'; ?>

<?php
//Create DB object
$db = new Database;

//Run Query
$db->query("DELETE FROM `addressbook_contacts` WHERE id=:id");

//Bind Value
$db->bind(':id', $_POST['id']);

if($db->execute()){
	echo "Kontakt ist gelöscht";
}else{
	echo "Kontakt ist nicht gelöscht";
}

?>