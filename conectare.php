<?php
  $cnx = mysqli_connect("localhost", "root", "", "mysite");
  if (mysqli_connect_errno()) {
  	die("Conectare nereusita!!!!!Mai incearca!" . mysqli_connect_error());
  };
  mysqli_set_charset($cnx, "utf8");
?>
