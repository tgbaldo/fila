<?php

require 'Fila.php';

$fila = new Fila;
$fila->push(2)->push(4)->push(10)->push(100);
$fila->pop();
echo 'Menor inteiro da fila:' . $fila->min();