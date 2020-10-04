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
     $name=$_POST['name'];
     $surname=$_POST['surname'];
     $char=$_POST['charSelect'];
echo'<div class="container">';

$nameLenght=strlen($name);
$surnameLenght=strlen($surname);
$lenght=0;
if($nameLenght>$surnameLenght){
$lenght=$nameLenght;
}
else{
    $lenght=$surnameLenght;
}
    
for($i=0;$i<$lenght;$i++){
    echo$char;
}
echo '</br>';
echo $char;
for($i=0;$i<$lenght;$i++){
    echo "&nbsp;&nbsp;&nbsp;";
}
echo $char;
echo '</br>';
echo $char;
for($i=0;$i<$lenght;$i++){
    echo "&nbsp;&nbsp;&nbsp;";
}
echo $char;
echo '</br>';
echo $char;
for($i=0;$i<$lenght;$i++){
    echo "&nbsp;&nbsp;&nbsp;";
}
echo $char;
echo '</br>';
     echo '<div class="center">'.$name.'</br>'.$surname.'</div>'; 
     for($i=0;$i<$lenght;$i++){
        echo$char;
    }    
    
    echo'</div>';
?>
</body>
</html>