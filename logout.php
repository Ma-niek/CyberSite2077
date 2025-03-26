<?php
session_start();        //Stworzenie sesji
session_unset();        //Zwolnienie wszystkich aktualnie zarejestrowanych zmiennych sesji
session_destroy();      //Zniszczenie sesji
 
header("Location: index.html");     //Po zniszczeniu sesji użytkownik zostaje przeniesiony do witryny index.html
exit();     //Wyjście
?>