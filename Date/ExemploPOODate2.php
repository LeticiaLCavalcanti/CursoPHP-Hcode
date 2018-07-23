<?php

$dt = new Datetime();

$periodo = new dateInterval("P15D"); // period 15 days

echo $dt->format("d/m/Y H:i:s");

echo "<br />";

$dt->add($periodo);

echo $dt->format("d/m/Y H:i:s");

?>