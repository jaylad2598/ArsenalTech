<?php
	$lst1 = array('a','b','c');
	$lst2 = array(1,2,3);
	$result = (array_combine($lst1,$lst2));
	foreach ($result as $k=>$v)
	{
		
		echo $k.",".$v.",";	
		
	}
?>






