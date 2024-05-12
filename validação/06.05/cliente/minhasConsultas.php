<?php

session_start();
include('../conexao.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lif4Pets - Minhas Consultas</title>

    <!-- Custom fonts for this template-->
    <link href="../vendorUser/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../cssUser/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../cssUser/card.css">

</head>

<body id="page-top">

<?php include ('header.php'); ?>



                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Minhas Consultas</h1>



                        <?php 

                            $cliente_id = $id;
                        
                                $select3 = "SELECT cons.status, cons.hr_consulta, cons.dt_consulta, cons.ds_consulta, cons.ds_medicacao, cons.tipo_exame, cli.nm_responsavel, p.nm_animal, clini.nm_unidade, e.especialidade
                                FROM tb_consulta as cons
                                    INNER JOIN tb_cliente as cli ON cons.cliente_id = cli.id
                                        INNER JOIN tb_paciente as p ON cons.paciente_id = p.id
                                            INNER JOIN tb_clinica as clini ON cons.clinica_id = clini.id
                                                INNER JOIN tb_especialidade as e ON cons.especialidade = e.id
                                                    WHERE cons.cliente_id = $cliente_id ";
                            
                            $resultado3 = $mysqli->query($select3);
                            while($dados3 = $resultado3->fetch_array()){
                            
                                $dt_consulta = date("d/m/Y", strtotime($dados3['dt_consulta']));
                                $status = $dados3['status'];
                                $hr_consulta = $dados3['hr_consulta'];
                                $ds_consulta = $dados3['ds_consulta'];
                                // $ds_medicacao = $dados['ds_medicacao']; 
                                // $tipo_exame = $dados['tipo_exame'];
                                $nm_responsavel = $dados3['nm_responsavel'];
                                $nm_animal = $dados3['nm_animal'];
                                $nm_unidade = $dados3['nm_unidade'];
                                $especialidade = $dados3['especialidade'];
                            
                                $card3 = "
                                <div class='container-fluid'>
                            <div class='courses-container'>
                                <div class='course'>
                                    <div class='course-preview'>
                                        <h2>$dt_consulta</h2>
                                    </div>
                                    <div class='course-info d-flex flex-column'>
                                        <h6>$status </h6>
                                        <h2>$nm_unidade </h2>
                                        <h6>$hr_consulta </h6>
                                        <h5 class='pt-3'>$ds_consulta </h5>
                                        <h5>$especialidade </h5>
                                        <h5>$nm_animal </h5>
                                        <h5>$nm_responsavel</h5>
                                        <div class='mt-auto d-flex justify-content-end pb-3'>
                                            <button class='btn btn-info mr-2'>Remarcar</button>
                                            <button class='btn btn-danger'>Cancelar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>";
                        echo $card3;
                            
                            }
                        ?>
                        <!-- <div class="container-fluid">
                            <div class="courses-container">
                                <div class="course">
                                    <div class="course-preview">
                                        <h2>$dt_consulta</h2>
                                    </div>
                                    <div class="course-info d-flex flex-column">
                                        <h6><?php $status ?></h6>
                                        <h2><?php $nm_unidade ?></h2>
                                        <h6><?php $hr_consulta ?></h6>
                                        <h5 class="pt-3"><? php $ds_consulta ?></h5>
                                        <h5><?php $especialidade ?></h5>
                                        <h5><?php $nm_animal ?></h5>
                                        <h5><?php $nm_responsavel ?></h5>
                                        <div class="mt-auto d-flex justify-content-end pb-3">
                                            <button class="btn btn-info mr-2">Remarcar</button>
                                            <button class="btn btn-danger">Cancelar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->




                </div>

            </div>

            <?php include ('footer.php'); ?>

</body>

</html>