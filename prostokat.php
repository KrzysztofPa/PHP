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
     $height=$_POST['height'];
     $width=$_POST['width'];
     $color=$_POST['color'];


if($height>0&&$width>0){
     echo '<h2> rysowanie prostokąta </h2>';
    echo'<div class="square" style="width: '.$width.'px; height: '.$height.'px; border-color:'.$color.'"><div class="topText">'.$width.'px'.'</div> <div class="leftText">'.$height.'px'.'<div/></div>';}
    else{
        echo '<h2> wprowadz prawidłowe wartosci </h2>';
    }

    
  
?>
</body>
</html>