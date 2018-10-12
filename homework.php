<?php
    $x = rand(0,100);
    $var1 = 1;
    $var2 = 1;
	
    while ($var1 < $x) {
        $var3 = $var1;
        $var1 = $var1 + $var2;
        $var2 = $var3;
    }
?>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Дополнительное задание</title>
  </head>
  <body>
    <h1>Дополнительное задание</h1>
    <?php
        echo 'Число: '.$x;
        echo "<br>";

        if ($var1 > $x) {
            echo 'задуманное число НЕ входит в числовой ряд';
        }    
	    else if ($var1 == $x) {
	        echo 'задуманное число входит в числовой ряд';
            }		   
    ?>
  </body>
</html>
