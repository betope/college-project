<?php
  $host = 'localhost';
  $dbname = 'u653934600_gioiaprodutos';
  $username = 'u653934600_gioia';
  $password = '@Gioia2021';

  $mysli = new mysqli($host, $dbname, $username, $password);

  if($mysqli-.connect_errno)
    echo "Falha ao conectar com o servidor: (".$mysqli->connect_errno") ".$mysqli->connect_error;
?>
