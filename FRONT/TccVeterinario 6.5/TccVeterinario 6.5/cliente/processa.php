<?php
session_start();

// Incluir a conexão com o BD
include_once ("../conexao.php");

$cliente_id = intval($_POST['cliente_id']);
$paciente_id = intval($_POST['paciente_id']);


$clinica_id = $_POST['clinica_id'];
$dt_consulta = $_POST['dt_consulta'];
$ds_consulta = $_POST['ds_consulta'];

// $nm_animal = $_POST['nm_animal'];

$data_hora_formatada = date("Y-m-d H:i:s", strtotime("$dt_consulta"));

$hr_consulta = date('H:i:s');
$status = 'agendada';

// Receber os dados do formulário

    




    // Verificar se os campos obrigatórios estão preenchidos
    // if (empty($nm_animal) || empty($nm_responsavel) || empty($especialidade)) {
    //     $_SESSION['msg'] = "<div class='alert alert-warning'>Preencha os campos corretamente</div>";
    //     header("Location: agendamentocli.php");
    //     exit();
    // }

    // Converter a data e hora para o formato do BD





                            // Inserir o novo agendamento no banco de dados
                $query_insert = "INSERT INTO tb_consulta (dt_consulta, hr_consulta, status, ds_consulta, cliente_id, paciente_id, clinica_id) 
                VALUES ('$data_hora_formatada', '$hr_consulta', '$status', '$ds_consulta', '$cliente_id', '$paciente_id', '$clinica_id')";

            if (mysqli_query($mysqli, $query_insert)) {
            $_SESSION['msg'] = "<div class='alert alert-success'>Agendamento realizado com sucesso.</div>";
            header("Location: user.php");
            exit();
            } else {
            $_SESSION['msg'] = "<div class='alert alert-danger'>Erro1 ao realizar o agendamento: " . mysqli_error($mysqli) . "</div>";
            header("Location: user.php");
            exit();
            }
  

// } else {
//     $_SESSION['msg'] = "<div class='alert alert-danger'>Erro2 ao realizar o agendamento: " . mysqli_error($mysqli) . "</div>";
//     header("Location: user1212.php");
//     exit();
// }
?>