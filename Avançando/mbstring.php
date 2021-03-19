<?php
$string = 'Testes de integração com PHP';

echo mb_strlen($string) . PHP_EOL;
echo mb_strtolower($string) . PHP_EOL;
echo mb_strtoupper($string) . PHP_EOL;
echo mb_convert_case($string, mode:MB_CASE_TITLE);