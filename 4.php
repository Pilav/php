<?php
	$massiv = array('Иванов', 'Петров', 'Коптяков', 'Смидович',
					'Лаптандер', 'Бердинских', 'Попов',
					'Кабинетов', 'Криворуков', 'Членикин');
	sort($massiv);
	for ($i = 0; $i < 10; $i++) echo $massiv[$i]."<br>";
?>
