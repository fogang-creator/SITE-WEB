




<?php

$dsn='mysql:host=localhost; port=3306; dbname=siteweblady';
$dbUser='root';
$pw='';
$pdo=new PDO($dsn, $dbUser, $pw);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?> 