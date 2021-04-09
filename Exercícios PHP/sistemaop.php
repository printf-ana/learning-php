<?php
// echo php_uname('s')."\n";    -> sistema em execução no momento
// PHP_OS   -> sistema  usado par BUILD do PHP
// if(strtoupper(substr(PHP_OS, 0, 3)) == "WIN") { //se as 3 primeiras letras da string do sistema operacional forem WIN
//     echo "Fabricante Microsoft";
// } elseif (strtoupper(substr(PHP_OS, 0, 3)) == "IOS") {
//     echo "Fabricante Apple";
// } else {
//     echo "Fabricante Google";
// }

if (stristr(php_uname('s'))) {
    echo "Fabricante Microsoft";
} elseif (stristr(php_uname('s'))) {
    echo "Fabricante Apple";
} else {
    echo "Fabticante Google";
}