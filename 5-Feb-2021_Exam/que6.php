<html>
<head>
    <title>Drum Pattern</title>
</head>
<body>
<?php
    echo "<pre>";
$number = 14;
$middle = $number/2;
for($i=1;$i<=$number;$i++){
    if($i==1 || $i==$number){
        echo str_pad('-------', $number+$middle, " ", STR_PAD_BOTH);
        echo "<br/>";
    }else if($i<$middle){
       echo str_pad('/', ($middle-$i)+1, " ", STR_PAD_LEFT);
        echo str_pad('\\', $i+($middle+$i-2), " ", STR_PAD_LEFT);
        echo "<br/>";
    }else if($i>$middle+1){
        echo str_pad('\\', $i-$middle, " ", STR_PAD_LEFT);
        echo str_pad('/', ((2*($number-$i))+($middle))+1, " ", STR_PAD_LEFT);
        echo "<br/>";
    }else if($i==$middle || $i==$middle+1){
        echo str_pad('|', ($i-$middle)-1, " ", STR_PAD_LEFT);
        echo str_pad('|', ($number+$middle)-2, " ", STR_PAD_LEFT);
        echo "<br/>";
    }
}
echo "</pre>";
?>
</body>
</html>
