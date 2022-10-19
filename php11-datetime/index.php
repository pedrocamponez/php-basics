<?php
$date = new DateTime(); //classe padrão do php DateTime() para gerar data, depois é só formatar com o $date->format

//podemos alterar o timezone:
//$date->setTimezone( new DateTimeZone('America/Sao_Paulo'));

//podemos alterar tempos, horas, dias, etc:
//$date->add(DateInterval::createFromDateString('7 years 2 days 4 hours 5 minutes 20 seconds')); <<<< Aumentar tempo
//$->sub(DateInterval::createFromDateString('5 days')); <<<<< Diminuir tempo

//como formatar a data no echo
echo $date->format('d/m/Y');

//como calcular a diferença entre uma data e outra
$date1 = new DateTime('2022-09-09');
$date2 = new DateTime('2022-10-10');

$diff = $date1->diff($date2);
echo $diff->format('%a');

//calcular quanto tempo falta para o reveillon:
$today = new DateTime();
$end = new DateTime('2022-12-31');

$diff = $today->diff($end);
echo $diff->format('%y anos, %m meses, %d dias, %h horas, %i minutos, %s segundos');