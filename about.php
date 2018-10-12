<?php        
    $name = 'Ирина';
    $age = 42;
    $email = 'bon-travel@yandex.ru';
    $city = 'Набережные Челны';
    $text = 'WEB-дизайнер';
?>		
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Ирина Егоренкова</title>
  </head>
  <body>
    <h1>Страница пользователя Ирины</h1>
    <?php
	    echo "<strong>Имя:</strong> $name<br>";
	    echo "<strong>Возраст:</strong> $age<br>";
	    echo "<strong>Адрес электронной почты:</strong> <a href=\"mailto:bon-travel@yandex.ru\"\">$email</a><br>";
	    echo "<strong>Город:</strong> $city<br>";
	    echo "<strong>О себе:</strong> $text";	
    ?>
  </body>
</html>
