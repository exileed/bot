<?php
require 'rb.php';
R::setup( 'mysql:host='.$_ENV['DB_HOST'].';dbname='.$_ENV['DB_NAME'].,$_ENV['DB_LOGIN'], $_ENV['DB_PASSWORD']);
?>
