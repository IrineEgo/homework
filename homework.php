<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Дополнительное задание</title>
  </head>
  <body>
  <h1>Дополнительное задание</h1>
  <?php
      $x = rand(0,100);
      $var1 = 1;
      $var2 = 1;
          echo "Число: ".$x;
	      echo "<br>";

       while ($var1 <= $x) {
           if ($var1 == $x) {
               echo "задуманное число входит в числовой ряд";
               break;
           } 
	       else {
               $var3 = $var1;
               $var1 = $var1 + $var2;
               $var2 = $var3;
           }
           if ($var1 > $x) {
               echo "задуманное число НЕ входит в числовой ряд";
               break;
           }
       }
   ?>
  </body>
</html>