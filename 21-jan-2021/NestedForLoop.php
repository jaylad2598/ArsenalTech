<?php
echo "<table border='1px' cellpadding ='5'>" ;
for ($i=1; $i<=7; $i++)
{
    echo "<tr sty>";
    for ($j=1; $j<=7; $j++)
    {
        echo "<td>";
        $a= $i * $j; 
        echo $a; 
        echo "</td>";
    }
    echo "<tr>";
}
echo "</table>";
?>