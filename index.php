<?php

include_once ('news.php');

$link = '/news.php';
$b = mb_strimwidth($a, 0, 180);


$string = $b;
$array = explode ( ' ', $string );
$lastWords = implode ( ' ', array_slice($array, count($array)-2, 2));


echo trim($b, $lastWords);
echo "<a href='$link'>";
echo ' '.$lastWords.'...';
echo '</a>';



?>

