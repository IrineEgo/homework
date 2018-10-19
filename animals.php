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
        foreach($continents as $animals){
            foreach($animals as $key => $animal){
			    $count = substr_count($animal, ' ');
                if ($count === 1) {
                array_push($name_two_words, $animal);
                }
			}
		}	

    //"Фантазийные" названия
	//Массив с первыми словами
    $random_first_word = [];
    //Массив со вторыми словами
    $random_second_word = [];
    //Формируем "перемешивание" слов
        foreach ($name_two_words as $key){
            $world =  explode(' ',$key);
            array_push($random_first_word,$world[0]);
            array_push($random_second_word, $world[1]);
        }
        //"Перемешиваем" 2 слово
        shuffle($random_second_word);		
    //Результат "фантазий"
    $final_result = [];
        for ($i = 0; $i < count($random_first_word); $i++){
        array_push($final_result, $random_first_word[$i] . ' ' . $random_second_word[$i]);
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
        <p><?php echo implode(",<br>", $name_two_words);?></p>
      <hr>
      <li>"Фантазийные" названия:</li>
	    <p><?php echo implode(",<br>", $final_result);?></p>
      <hr>
      </ol>
      <div>
        <h2>Дополнительное задание</h2> 
          <?php
          //Вывод всего массива фантазийных животных с их континентами
          echo '<pre>';
              var_dump($animalsContinent);
          echo '</pre>';	
          ?>
     </div>  
  </body>
</html>
