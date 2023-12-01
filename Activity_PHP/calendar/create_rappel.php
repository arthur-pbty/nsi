<?php

function generateRandomString($length = 10) {
   $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
   $randomString = '';

   // Génère une chaîne aléatoire de la longueur spécifiée
   for ($i = 0; $i < $length; $i++) {
       $randomString .= $characters[mt_rand(0, strlen($characters) - 1)];
   }

   return $randomString;
}

$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$rappel = $_POST['rappel'];
$id = generateRandomString();

$name = urlencode("$day-$month-$year-$id");

setcookie("$name", "$rappel", time() + 315360000, "/");

header("Location: index.php");
exit;
?>