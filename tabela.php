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
     $rows=$_POST['rows'];
     $column=$_POST['columns'];
     $title=$_POST['title'];
     $x=0;
echo'<div class="container">';
echo'<table>';
 echo'<caption>'.$title.'</caption>';
 for($i=0;$i<$rows;$i++){
     echo '<tr>';
    for($j=0;$j<$column;$j++){
        $x++;
        echo '<td>'.$x.'</td>';
    }
 }
echo'</table>';
echo'</div>';
?>
</body>
</html>