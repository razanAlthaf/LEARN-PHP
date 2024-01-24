<?php

//number
echo 1.23_456_789;

//boolean
echo "benar :";
echo true;
echo "salah :";
echo "false";


//string
// single quotes
echo 'Name : ';
echo 'Razan althaf';

echo "\n";
// double quotes
echo "Name : ";
echo "Razan althaf";

echo "\n";

//heredoc
echo <<<teks
coba teks panjang atau multiline kalo di js
ini pake "``" backtick "\n"
teks;

//nowdoc
echo <<<'TEKS'
coba teks panjang atau multiline kalo di js
ini pake "``" backtick
TEKS;


//NULL
$name = "razan";
$name = null;

// unset($name); ini cara menghapus variabel

echo "\n";
echo "nama saya : ";
echo $name;



?>