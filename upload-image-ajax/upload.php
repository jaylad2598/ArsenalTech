<?php
if (!file_exists('images')) {
	mkdir('images', 0777);
}
if($_FILES['file']['name'] != '')
{

	$path = $_FILES['file']['tmp_name'];
	$ipath = "images/".basename($_FILES['file']['name']);
	if(move_uploaded_file($path,$ipath)){
		echo '<img src="'.$ipath.'" /><br>';
	}
}

?>
