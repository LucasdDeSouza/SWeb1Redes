<?php
// Configurações de conexão
$servidor = "10.200.200.5";
$base = "dbSIC0217";
$usuario = "SIC0217user";
$senha = "alunos";

try {
    $conn = new PDO("mysql:host=$servidor;dbname=$base", $usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("<h2 style='color:red; text-align:center;'>Falha na conexão: " . $e->getMessage() . "</h2>");
}

$sql = "SELECT * FROM tb_alunos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>SWeb1 - Lucas & Rafael</title>
    <style>
        body {
            background-color: #ADD8E6;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .container {
            margin: 50px auto;
            max-width: 900px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            padding: 30px;
        }

        h1 {
            color: #003366;
            margin-bottom: 10px;
        }

        img {
            width: 200px;
            height: auto;
            border-radius: 8px;
            margin: 20px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th {
            background-color: #003366;
            color: white;
            padding: 10px;
            font-size: 1.1em;
        }

        td {
            background-color: #f0f8ff;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        tr:hover td {
            background-color: #d6eaff;
        }

        footer {
            margin-top: 30px;
            font-size: 0.9em;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="/imagens/looneytunes.webp" alt="Looney Tunes">
        <h1>SWeb1 - Lucas & Rafael</h1>
        <h3>Matrículas: 9596 & 7027</h3>

        <?php
        if ($result->rowCount() > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Nome</th><th>Telefone</th></tr>";
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['id_alunos']) . "</td>";
                echo "<td>" . htmlspecialchars($row['nm_alunos']) . "</td>";
                echo "<td>" . htmlspecialchars($row['nr_telefone']) . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p><strong>Nenhum registro encontrado.</strong></p>";
        }
        $conn = null;
        ?>
    </div>

    <footer>
        <p>&copy; 2025 SWeb1 - Desenvolvido por Lucas (9596) & Rafael (7027)</p>
    </footer>
</body>
</html>

