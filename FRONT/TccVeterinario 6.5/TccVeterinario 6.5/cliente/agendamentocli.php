<?php
session_start();
include ('../conexao.php');
 include ('header.php'); 
// Consulta SQL para selecionar todos os registros da tabela tb_paciente
$sql = "SELECT cliente_id, cliente_nome, nome_pet, especie_pet, paciente_id
FROM (
    SELECT p.cliente_id AS cliente_id, c.nm_responsavel AS cliente_nome, p.nm_animal AS nome_pet, e.ds_especie AS especie_pet, p.id AS paciente_id,
    ROW_NUMBER() OVER (PARTITION BY c.id, p.nm_animal ORDER BY p.id) AS row_num
    FROM tb_paciente AS p
    INNER JOIN tb_cliente AS c ON p.cliente_id = c.id
    INNER JOIN tb_especie AS e ON p.especie_id = e.id

) AS sub
WHERE row_num = 1 AND cliente_id = $id ";


$result = $mysqli->query($sql);

$pets = [];

// Verificando se há registros retornados pela consulta
if ($result->num_rows > 0) {
    // Iterando sobre cada linha de resultados
    while ($row = $result->fetch_assoc()) {
        // Adicionando os dados do pet ao array
        $pet = [
            'nome' => $row["nome_pet"],
            'especie' => $row["especie_pet"],
            'paciente_id' => $row['paciente_id']        ];

        // Adicionando o pet ao array de pets
        array_push($pets, $pet);
    }
} else {
    echo "Não foram encontrados registros na tabela.";
}

// // Consulta SQL para recuperar as especialidades
// $sql = "SELECT id, especialidade FROM tb_especialidade";
// $resultado = mysqli_query($mysqli, $sql);

// // Array para armazenar as especialidades
// $especialidades = array();

// // Verificar se a consulta retornou resultados
// if (mysqli_num_rows($resultado) > 0) {
//     // Loop através dos resultados da consulta e armazenar as especialidades no array
//     while ($row = mysqli_fetch_assoc($resultado)) {
//         $especialidades[$row['id']] = $row['especialidade'];
//     }
// }

// // Verificar se o formulário foi enviado e se a especialidade foi selecionada
// $especialidadeSelecionada = '';
// if (isset($_POST['especialidade'])) {
//     $especialidadeSelecionada = $_POST['especialidade'];
// }

// // Consulta SQL para recuperar as especialidades
// $sql = "SELECT id, especialidade FROM tb_especialidade";
// $resultado = mysqli_query($mysqli, $sql);

// Verificar se o parâmetro 'clinica' foi enviado via POST
if (isset($_POST['clinica'])) {
    $clinicaSelecionada = $_POST['clinica'];
    // Faça o que precisar com a clínica selecionada, como armazená-la em uma sessão
    $_SESSION['clinicaSelecionada'] = $clinicaSelecionada;
    

} else {
    // Redirecionar de volta para a página anterior ou exibir uma mensagem de erro
   // header("Location: petsCadastrados.php");
    exit(); // Garantir que o código seja interrompido após redirecionar
}
  
// Verificar se o parâmetro 'clinica' foi enviado via POST
if (isset($_POST['id'])) {
    $id_clinica = $_POST['id'];
    // Faça o que precisar com a clínica selecionada, como armazená-la em uma sessão
    $_SESSION['id_clinica'] = $id_clinica
    ;
} else {
    // Redirecionar de volta para a página anterior ou exibir uma mensagem de erro
   // header("Location: petsCadastrados.php");
    exit(); // Garantir que o código seja interrompido após redirecionar
}
$cliniid=$id_clinica ;
$clinica_id = (int)$cliniid;

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.min.css">
    <link href="../vendorUser/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../cssUser/sb-admin-2.min.css" rel="stylesheet">

    <title>Sistema - Agendamento</title>
</head>

<body>


    <style>
        .disabled-time {
            display: none;
        }
    </style>

    <div class="container-fluid">
        <div class="jumbotron">
            <h1 class="text-center">Agendamento</h1><br>
        </div><br>
        <form class="form-horizontal" action="processa.php" method="POST">
            <div class="col-sm-3 col-sm-offset-3">
                <?php $cliente_id = $id; ?>
                <label>Nome: <?php echo $nm_responsavel; ?></label>
                <input type="hidden" name="cliente_id" value="<?php echo $cliente_id; ?>">
            </div>


            <div class="col-sm-3">
                <label>Clinica: <?php echo $clinicaSelecionada; ?></label>
                <!-- Se desejar, pode armazenar o valor em um input hidden -->
                <input type="hidden" name="clinica_id" value="<?php echo $clinica_id; ?>">
            </div>
            
            <?php 
            // echo $clinica_id; 
            // echo $cliente_id;
            ?>


            <div class="col-sm-6 col-sm-offset-3">
                <label> Pets</label>
                <select name="paciente_id" class="form-control">
                    <option value="">Selecione um pet</option>
                    <?php foreach ($pets as $pet): ?>
                        <option value="<?php  echo $pet['paciente_id']; ?>"><?php echo $pet['nome']; ?></option>
                    <?php endforeach; ?>
                </select>

            </div>

            <!-- Dropdown com as opções -->


            <div class="col-sm-6 col-sm-offset-3">
                <label>Data e hora</label>
                <div class="input-group date data_formato" data-date-format="dd/mm/yyyy HH:ii:ss">
                    <input class="form-control" type="text" name="dt_consulta" placeholder="Data da consulta">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </span>
                </div>
            </div>
            <div class="col-sm-6 col-sm-offset-3">
                <label>Descrição</label>
                <textarea class="form-control" name="ds_consulta" rows="3"></textarea>
            </div>
            <div class="col-sm-offset-3 col-sm-6"><br>
                <button type="submit" class="btn btn-success">Agendar</button>

                <?php
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
            </div>
        </form>
        <div class="col-sm-6 col-sm-offset-3" id="div_conteudo"><!-- div onde será exibido o conteúdo-->
            <img id="loader" src="loader.gif" style="display:none;margin: 0 auto;">
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap-datetimepicker.min.js"></script>
    <script src="js/locales/bootstrap-datetimepicker.pt-BR.js"></script>
    <script type="text/javascript">
        $('.data_formato').datetimepicker({
            weeKStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            forceParse: 0,
            showMeridian: 1,
            language: "pt-BR",
            startDate: '-0d'
        });

        $(document).ready(function () {// Ao carregar a página faça o conteudo abaixo
            $('.btn_carrega_conteudo').click(function () {// Ao clicar no elemento que contenha a classe .btn_carrega_conteudo faça...
                var carrega_url = this.id; //Carregar url pegando os dados pelo ID
                carrega_url = carrega_url + '_listar.php'; //Carregar a url e o conteudo da página
                $.ajax({ //Carregar a função ajax embutida no jQuery
                    url: carrega_url,
                    //Variável DATA armazena o conteúdo da requisição
                    success: function (data) {//Caso a requisição seja completada com sucesso faça...
                        $('#div_conteudo').html(data);// Incluir o conteúdo dentro da DIV
                    },
                    beforeSend: function () {//Antes do envio do cabeçalho faça...
                        $('#loader').css({ display: "block" });//carregar a imagem de load
                    },
                    complete: function () {//Após o envio do cabeçalho faça...
                        $('#loader').css({ display: "none" });//esconder a imagem de load
                    }
                });
            });
        });
    </script>
</body>
<?php include ('footer.php'); ?>

</html>