<?php
// Configurações
$servidor = "10.200.200.5";
$base = "dbSIC0217";
$usuario = "SIC0217user";
$senha = "alunos";
try {
	$conn = new PDO("mysql:host=$servidor;dbname=$base", $usuario, $senha);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo "Falha na conexão: " . $e->getMessage();
}
$sql = "SELECT * FROM tb_alunos";
$result = $conn->query($sql);
echo "<body style='background-color:#ADD8E6;'>";
echo "<center>";
echo "<h1>SWebX -  SEU NOME -   XXXX</h1>";
echo "<img src=’https://abre.ai/banneracme’>";
if ($result->rowCount() > 0) {
	echo "<table border='1' align='center'>";
	echo "<tr><th>ID</th><th>Nome</th><th>Telefone</th></tr>";
	foreach ($result as $row) {
    	echo "<tr>";
    	echo "<td>" . $row['id_alunos'] . "</td>";
    	echo "<td>" . $row['nm_alunos'] . "</td>";
    	echo "<td>" . $row['nr_telefone'] . "</td>";
    	echo "</tr>";
	}
	echo "</table>";
} else {
	echo "<center>Nenhum registro encontrado.</center>";
}
$conn = null;
echo  "</center>";
echo "</body>";
?>
