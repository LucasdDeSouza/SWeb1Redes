<?php
$ipv4 = $_SERVER["REMOTE_ADDR"];
echo "<body style='background-color: #ADD8E6;'>";
echo "<center>";
echo "<img src='/imagens/download.png'>";
echo "<h1>Página de teste PHP no Servidor SWeb1</h1>";
echo "<h1>Lucas - 9596</h1>";
echo "<h1>Rafael - 7027</h1>";
echo "<h1>Servidor SWeb1</h1>";
echo "<h1>Endereço IP do Servidor: $ipv4</h1>";
echo "</center>";
phpinfo();
echo "</body>";
?>
