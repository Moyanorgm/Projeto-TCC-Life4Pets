<?php
include ('../conexao.php'); // Inclua o arquivo de conexão com o banco de dados

// Consulta SQL para selecionar os valores da coluna ENUM
$sql = "SHOW COLUMNS FROM tb_consulta LIKE 'ds_medicacao'";
$resultado = $mysqli->query($sql);

// Verifica se a consulta retornou algum resultado
if ($resultado->num_rows > 0) {
    $linha = $resultado->fetch_assoc();
    // Extrai os valores ENUM da resposta
    $enum_values = explode("','", substr($linha['Type'], 6, -2));

    echo '<select name="opcao">';
    foreach ($enum_values as $valor) {
        echo "<option value='$valor'>$valor</option>";
    }
    echo '</select>';
} else {
    echo "Nenhum valor ENUM encontrado.";
}

// Fechar conexão
$mysqli->close();
?>
