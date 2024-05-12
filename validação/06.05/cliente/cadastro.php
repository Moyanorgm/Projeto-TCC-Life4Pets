<?php
include('conexao.php');
//////////////////////////           FUNCIONANDO atualizado         ////////////////////////



// Dados para inserção na tabela de login
$login = $mysqli->real_escape_string($_POST['login']);
$email = $mysqli->real_escape_string($_POST['email']);
$senha = password_hash($mysqli->real_escape_string($_POST['senha']), PASSWORD_DEFAULT); // Criptografar a senha

// Dados para inserção na tabela de cliente
$nm_responsavel = $mysqli->real_escape_string($_POST['nm_responsavel']);
$documento_cpf = $mysqli->real_escape_string($_POST['documento_cpf']);
$cep = $mysqli->real_escape_string($_POST['cep']);
$estado = $mysqli->real_escape_string($_POST['estado']);
$cidade = $mysqli->real_escape_string($_POST['cidade']);
$bairro = $mysqli->real_escape_string($_POST['bairro']);
$rua = $mysqli->real_escape_string($_POST['rua']);
$nr = $mysqli->real_escape_string($_POST['nr']);
$celular = $mysqli->real_escape_string($_POST['celular']);


// Verifica se algum input do cadastro esta vazio
if (empty($login) || empty($email) || empty($senha) || empty($nm_responsavel) || empty($documento_cpf) || empty($cep) || empty($estado) || empty($cidade) || empty($estado) || empty($bairro) || empty($rua) || empty($nr) || empty($celular)) {
    // Conectar ao banco de dados
    // $conn = new mysqli("localhost", "root", "root", "consultapet");
    echo "<script>alert('Preencha todos os campos.'); window.location.href = 'register.php';</script>";
}else {
    echo "<script>alert('Dados inseridos com sucesso.'); window.location.href = 'login.php';</script>";
}



// Verificar se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Preparar a consulta SQL
$sql = "INSERT INTO tb_cliente (nm_responsavel) VALUES ($nm_responsavel)";

// Preparar a instrução SQL
$stmt = $conn->prepare($sql);

// Vincular os parâmetros
$stmt->bind_param("s", $nm_responsavel);

// Executar a consulta
if ($stmt->execute()) {
    echo "Dados inseridos com sucesso.";
} else {
    echo "Erro ao inserir os dados: " . $conn->error;
}

if(isset($_POST['bt_cadastrar'])){
    $nm_responsavel = $_POST['nm_responsavel'];
    $email = $mysqli->real_escape_string($_POST['email']);
    $documento_cpf = $mysqli->real_escape_string($_POST['documento_cpf']);
    $celular = $mysqli->real_escape_string($_POST['celular']);
    $login = $mysqli->real_escape_string($_POST['login']);
    $senha = $mysqli->real_escape_string($_POST['senha']);
    $cep = $mysqli->real_escape_string($_POST['cep']);
    $estado = $mysqli->real_escape_string($_POST['estado']);
    $cidade = $mysqli->real_escape_string($_POST['cidade']);
    $bairro = $mysqli->real_escape_string($_POST['bairro']);
    $rua = $mysqli->real_escape_string($_POST['rua']);
    $nr = $mysqli->real_escape_string($_POST['nr']);

    //ARRAY DE ERROS
    $erros = [];

    

    if (!empty($erros)) {
        foreach ($erros as $erro) {
            echo "<p>$error</p>";
        }
        echo "<a href='cadastro.html'>Voltar ao formulário</a>";
    }else{
        echo "<h2>Dados cadastrados com sucesso:</h2>";
        echo "<p>Nome: $nm_responsavel</p>";
        echo "<p>Email: $email</p>";
    }

    // Verifica se o campo nome foi preenchido
    $sql_verificar_campo_nome_vazio = "SELECT id FROM tb_cliente WHERE nm_responsavel = '$nm_responsavel'";
    $resultado_verificar_campo_nome_vazio = $mysqli->query($sql_verificar_campo_nome_vazio );
    if($resultado_verificar_campo_nome_vazio->num_rows > 0){
        echo "<script>alert('Este email já está cadastrado.'); window.location.href = 'cadastro.php';</script>";
    }

    //SANITIZAR
    // $nm_responsavel = filter_input(INPUT_POST,'nm_responsavel', FILTER_SANITIZE_STRING);

    // $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);

    // $documento_cpf = filter_input(INPUT_POST,'documento_cpf', FILTER_SANITIZE_NUMBER_INT);

    // $celular = filter_input(INPUT_POST,'celular', FILTER_SANITIZE_NUMBER_INT);

    // $login = filter_input(INPUT_POST,'login', FILTER_SANITIZE_EMAIL);

    // $senha = filter_input(INPUT_POST,'senha', FILTER_SANITIZE_STRING, FILTER_SANITIZE_NUMBER_INT);

    // $cep = filter_input(INPUT_POST,'cep', FILTER_SANITIZE_NUMBER_INT);

    // $estado = filter_input(INPUT_POST,'estado', FILTER_SANITIZE_STRING);
    
    // $cidade = filter_input(INPUT_POST,'cidade', FILTER_SANITIZE_STRING);

    // $bairro = filter_input(INPUT_POST,'bairro', FILTER_SANITIZE_STRING);

    // $rua = filter_input(INPUT_POST,'rua', FILTER_SANITIZE_STRING);

    // $nr = filter_input(INPUT_POST,'nr', FILTER_SANITIZE_NUMBER_INT);

    

    // Verifica se o campo cpf foi preenchido com 11 dígitos
    if (strlen((string)$documento_cpf) != 11){
        echo "<script>alert('Este email já está cadastrado.'); window.location.href = 'cadastro.php';</script>";
    }

    // Verifica se o cep é válido, se sim ele preenche automáticamente o endereço (pendente)

    // Verifica o número de celular existe(pendente)


    
    
}


// Verificar se o email já está cadastrado
$sql_verificar_email = "SELECT id FROM tb_login WHERE email = '$email'";
$resultado_verificar_email = $mysqli->query($sql_verificar_email);
if ($resultado_verificar_email->num_rows > 0) {
    echo "<script>alert('Este email já está cadastrado.'); window.location.href = 'cadastro.php';</script>";
    exit; // Parar a execução do script se o email já estiver cadastrado
}

// Verificar se o CPF já está cadastrado
$sql_verificar_cpf = "SELECT id FROM tb_cliente WHERE documento_cpf = '$documento_cpf'";
$resultado_verificar_cpf = $mysqli->query($sql_verificar_cpf);
if ($resultado_verificar_cpf->num_rows > 0) {
    echo "<script>alert('Este CPF já está cadastrado.'); window.location.href = 'cadastro.php';</script>";
    exit; // Parar a execução do script se o CPF já estiver cadastrado
}

// Iniciar uma transação
$mysqli->begin_transaction();

try {
    // Inserir dados na tabela de login
    $sql_login = "INSERT INTO tb_login_cliente (login, email, senha) VALUES ('$login', '$email', '$senha')";
    $mysqli->query($sql_login);

    // Recuperar o ID do login inserido
    $login_cliente = $mysqli->insert_id;

    // Inserir dados na tabela de cliente com a chave estrangeira para login_id
    $sql_cliente = "INSERT INTO tb_cliente (nm_responsavel, documento_cpf, login_cliente, cep, estado, cidade, bairro, rua, nr, celular) VALUES ('$nm_responsavel', '$documento_cpf', '$login_cliente', '$cep', '$estado', '$cidade', '$bairro', '$rua', '$nr', '$celular')";
    $mysqli->query($sql_cliente);

    // Confirmar a transação
    $mysqli->commit();

    echo "<script>alert('Dados inseridos com sucesso.'); window.location.href = 'login.php';</script>";
} catch (Exception $e) {
    // Reverter a transação em caso de erro
    $mysqli->rollback();

    echo "<script>alert('Erro ao inserir dados: " . $e->getMessage() . "'); window.location.href = 'cadastro.php';</script>";
}

// Fechar conexão
$mysqli->close();
    

?>