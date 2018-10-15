<?php
    //Исходный массив
    $continents = [
        'Africa' => [
	        'Elephantidae',
	        'Hippopotamus amphibius',
	        'Pan troglodytes'
        ],
        'Antarctica' => [
	        'Hydrurga leptonyx',
	        'Lobodon carcinophagus'
        ],
        'Australia' => [
	        'Phascolarctos cinereus',
	        'Myrmecobius fasciatus'
        ],	
        'Eurasia' => [
	        'Ursus arctos',
	        'Erinaceus europaeus',
	        'Camelus'
        ],
        'North America' => [
	        'Rangifer tarandus',
	        'Castor fiber',
	        'Alligatoridae'
        ],
        'South America' => [
	        'Dasypodidae',
	        'Panthera onca'
        ]		
    ];

    //Названия из 2 слов
    $name_two_words = [];
        foreach($continents as $continent => $animals){
            foreach($animals as $animal){
	            $all_animals = [];
	            $anim = explode(' ', $animal);
	            $all_animals[] = $anim;
 
	        foreach($all_animals as $k){
		        if(count($k) === 2){
			        $comma_separated = implode(",", $k);
			        $str = str_replace(',', ' ', $comma_separated);
			        $name_two_words[] = $str;
		        }
	        }  
            }
        }
		
        //Получаем "фантазийных" животных
        foreach($name_two_words as $name){
            $parts = explode(' ', $name);
            $first[] = $parts[0];
            $second[] = $parts[1];
        }
		
        //"Перемешиваем" 1 слово
        $random_first_word = []; 
            while (count($random_first_word) < count($name_two_words)){
                $proverka = $first[rand(0, count($name_two_words)-1)];
            if (!in_array($proverka, $random_first_word)) {
	            array_push($random_first_word, $proverka);
            }
            }
			
        //"Перемешиваем" 2 слово
        $random_second_word = []; 
            while (count($random_second_word) < count($name_two_words)){
                $proverka = $second[rand(0, count($name_two_words)-1)];
            if (!in_array($proverka, $random_second_word)) {
	            array_push($random_second_word, $proverka);
            }
            }

        //Результат "фантазий"			
        $final_result = []; 
            for($i = 0; $i < count($name_two_words); $i++){
                $final_result[] = $random_first_word[$i] . ' ' . $random_second_word[$i];  
            }
			
        //Дополнительное задание	
        $animalsContinent = [];	
            foreach ($final_result as $elem) {
                $words1 = explode(' ', $elem);
                    foreach ($continents as $key => $animal) {
	                    foreach ($animal as $value) {
		                    $words2 = explode(' ', $value);
		                if ($words1[0] === $words2[0]) {
			                $animalsContinent[$key][] = $elem;
		                }
	                    }
                    }
                }

        foreach ($continents as $key => $item) $home[] = $key;
            foreach ($animalsContinent as $key => $animals) $arrAnimals[$key] = $animals;
                $home = array_flip($home);
                $animalsContinent = array_merge($home, $arrAnimals);
?>

<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Жестокое обращение с животными</title>
    <style type="text/css">
      li {
        font-family: sans-serif;
        font-style: italic;
        font-size: 20.8px;
        line-height: 1.4;
		margin: 8px;
        }
		
      p {
        font-family: sans-serif;
        line-height: 1.7;
        font-size: 1.1em;
		margin: 0;
      }
	  div {
	   margin-left: 50px; 
	  }
    </style>
  </head>
  <body>
    <h1>Задание "Жестокое обращение с животными"</h1>
    <ol>
      <li>Исходный массив:</li>
        <?php
            echo '<pre>';
                var_dump($continents);
            echo '</pre>';
        ?>
      <hr>
      <li>Названия, состоящие из двух слов:</li>
        <?php echo '<p>'. implode(",<br>", $name_two_words) . '</p>'; ?>
      <hr>
      <li>"Фантазийные" названия:</li>
        <?php echo '<p>' . implode(",<br>", $final_result) . '</p>'; ?>
      <hr>
    </ol>
    <div>
    <h2>Дополнительное задание</h2> 
      <?php
          echo "<h3>{$key }</h3>";
          echo '<p>' . implode(",<br>", $animals) . '</p>';
          echo '<hr>';
          //Вывод всего массива фантазийных животных с их континентами
          echo '<pre>';
              var_dump($animalsContinent);
          echo '</pre>';	
      ?>
    </div> 
  </body>
</html>
