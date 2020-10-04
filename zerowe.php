<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynik</title>
    <link rel="stylesheet" href="phpstyle.css">
</head>
<body>
<?php
     $a=$_POST['a'];
     $b=$_POST['b'];
     $c=$_POST['c'];
echo'<div class="container">';
echo '<h2>Liczenie miejsc zerowych</h2>';
echo 'F(x)= '.$a.'x² +'.$b.'x +'.$c.'</br>';

$delta = pow($b, 2)-4*$a*$c;
echo 'Δ = '.$delta.'</br>';

if($delta<0){
echo 'Nie ma miejsc zerowych';
}
else if($delta==0){
    $x1=($b-2*$b)/(2*$a) ;
    echo'X1='.$x1;
}
else{

    $x1=(($b-2*$b)+sqrt($delta))/(2*$a);
    echo'X1='.$x1.'</br>';
    $x2=(($b-2*$b)-sqrt($delta))/(2*$a);
    echo'X2='.$x2;
}

echo'</div>';
?>
</body>
</html>