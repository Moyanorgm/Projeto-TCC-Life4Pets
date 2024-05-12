<?php
include('../conexao.php');
session_start();
//////////////////////////           FUNCIONANDO atualizado         ////////////////////////


// Dados para inserção na tabela de cliente
$nm_animal = $mysqli->real_escape_string($_POST['nm_animal']);
$idade = $mysqli->real_escape_string($_POST['idade']);
$peso = $mysqli->real_escape_string($_POST['peso']);
$cor = $mysqli->real_escape_string($_POST['cor']);
$sexo = $mysqli->real_escape_string($_POST['sexo']);
$castrado = $mysqli->real_escape_string($_POST['castrado']);
$cliente_id = intval($_POST['cliente_id']);
$especie_id = intval($_POST['especie_id']);


try {


    // Inserir dados na tabela de cliente com a chave estrangeira para login_id
    $sql_pet = "INSERT INTO tb_paciente (nm_animal, idade, peso, cor, especie_id, sexo, castrado, cliente_id) VALUES ('$nm_animal', '$idade', '$peso', '$cor', '$especie_id', '$sexo', '$castrado', '$cliente_id')";
    $mysqli->query($sql_pet);

    // Confirmar a transação
    $mysqli->commit();

    echo "<script>alert('Dados inseridos com sucesso.'); window.location.href = 'petsCadastrados.php';</script>";
} catch (Exception $e) {
    // Reverter a transação em caso de erro
    $mysqli->rollback();

    echo "<script>alert('Erro ao inserir dados: " . $e->getMessage() . "'); window.location.href = 'cadastraPet.php';</script>";
}

// Fechar conexão
$mysqli->close();
    

?>