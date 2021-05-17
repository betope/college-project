<?php
  $host = "localhost";
  $user = "u653934600_gioia";
  $password = "@Gioia2021";
  $dbname = "u653934600_gioiaprodutos";

  $mysqli = new mysqli($host, $user, $password, $dbname);
  if ($mysqli->connect_errno)
    echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
 ?>
