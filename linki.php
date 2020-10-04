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
     $link=$_POST['link'];
     echo'<div class="container">';
     echo '<h2> Twoje utworzone linki </h2>';
    echo'<ul> ';
    $array = explode(';', $link);
    for($i=0;$i<count($array);$i++){
        echo'<li><a href="'.$array[$i].'">'.$array[$i].'</a></li>';
        }
echo'</ul>';
echo'</div>';


?>
</body>
</html>