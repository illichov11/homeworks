<?php
echo "Передаем за проезд!\n";
$handle = fopen ("php://stdin", "r");
$banknote = fgets($handle);

echo (($banknote > 100) ? "Вийди отсюда розбійник" :(($banknote >10)&&(($banknote <100)) ? "Проходите по салону" : "Покиньте транспорт"));


echo "\n";
