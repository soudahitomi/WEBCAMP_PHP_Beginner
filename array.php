<?php

$awk = [123];
var_dump($awk);

$awk2 = [ 999, "hello", 3.14 ];
var_dump($awk2);

$awk2[0] = 654321;
var_dump($awk2[0]);

$awk[] = "string value";
$awk[] = 234556;
var_dump($awk);