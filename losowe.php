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

 $a=$_POST['num_1'];


 if($a >= 0 &&  $a <= 100){

   echo '<h2>LOSOWANIE</h2>';
   echo '<div class="container">'; 
   $x=0;
   do {
      $randomNumber = rand (0, 100);
      if($randomNumber%2==0){
      echo '<span class="parzysta">'.$randomNumber.'</span> ';
   }
   else{
      echo '<span class="nieparzysta">'.$randomNumber.'</span> ';
   }
      
      $x++;
  } while ($randomNumber != $a);

  echo '</div>'; 

  echo 'Twoja liczba została wylosowana jako '.$x.'</br>';  
  echo '<span class="parzysta">Liczba parzysta</span></br>';
  echo '<span class="nieparzysta">Liczba nieparzysta</span> ';
}
 else{
   echo 'Wprowadz liczbe z zakresu 0-100';
 };


  
?>
</body>
</html>