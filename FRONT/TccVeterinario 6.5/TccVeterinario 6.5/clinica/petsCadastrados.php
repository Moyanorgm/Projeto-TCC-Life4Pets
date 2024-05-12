<?php
session_start();
// include('verificaLogin.php');
?>


    <?php include ('header.php'); ?>
    <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lif4Pets-Agendamento Dia</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/cardDia.css">



</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar"
            style="background-color: #0e213b; padding-top: 1rem;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="user.php">
                <div class="sidebar-brand-icon">
                    <img src="../imgUser/LogoBrancaTotal.png" alt="" width="130rem" class="pt-2">
                </div>

            </a>


            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="user.php">
                    <i class="fas fa-home fa-sm"></i>
                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0 ">

            <li class="nav-item ">
                <a class="nav-link" href="agendamentosDia.php">
                    <i class="fas fa-flag"></i>
                    <span>Agendados para Hoje</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="agendadosMes.php">
                    <i class="fas fa-calendar fa-2x"></i>
                    <span> Agendados no Mês</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="clientes.php">
                    <i class="fas fa-list fa-sm fa-fw mr-2"></i>
                    <span>Clientes</span></a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="planos.php">
                    <i class="fas fa-dollar-sign fa mr-2"></i>
                    <span>Assinatura</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="petsCadastrados.php">
                    <i class="fas fa-dollar-sign fa mr-2"></i>
                    <span>Pets Cadastrados</span></a>
            </li>
            <div class="text-center d-none d-md-inline pt-4">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- UPGRADE DO PLANO -->
            <!-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>Lif4Pets Pro</strong> evolua seu plano e obtenha mais armazenamento de clientes e mais!</p>
                <a class="btn btn-success btn-sm" href="assinatura.html">Evoluir!</a>
            </div> -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"
                        style="color:#0e213b; ;">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar . . ."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn" style="background-color: #0e213b; color: white;" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Buscar . . ." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn" style="background-color: #0e213b; color: white;"
                                                type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header border-0" style="background-color: #0e213b;">
                                    Notificações
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">30/01/2024</div>
                                        <span class="font-weight-bold">Novo diagnóstico pronto para download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">12/01/2024</div>
                                        Seu agendamento foi confirmado para o dia 20/02!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">07/01/2024</div>
                                        Confirmar agendamento para amanhã dia 08/01/2024, 8 horas da manhã.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Mostrar todas as
                                    notificações</a>
                            </div>
                        </li>



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $login ?></span>
                                <!-- IMAGEM USUARIO -->
                                <img class="img-profile rounded-circle" src="<?php echo $imagem; ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="./perfil.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configurações
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="./logout.php" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Sair
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

   










                <div class="container-fluid">
                    <!-- HEADER CONTEÚDO -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-0 font-weight-bold text-center">Pets Atendidos</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th> Nome do Cliente </th>
                                        <th> CEP </th>
                                        <th> Estado </th>
                                        <th> Cidade </th>
                                        <th> Bairro </th>
                                        <th> Rua </th>
                                        <th> Numero </th>
                                        <th> Telefone </th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <!-- <tr>
                                            <th>Data da Consulta</th>
                                            <th>Horario da Consulta</th>
                                            <th>Tipo de exame</th>
                                            <th>Cliente</th>
                                            <th>Paciente</th>
                                            <th>especialidade</th>
                                            <th>Descrição</th>
                                            <th>Status</th>
                                        </tr> -->
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <?php




                                            $select3 = "SELECT 
                                            MIN(p.nm_animal) AS nm_animal, 
                                            MIN(p.idade) AS idade, 
                                            MIN(p.peso) AS peso, 
                                            MIN(p.cor) AS cor, 
                                            MIN(p.sexo) AS sexo, 
                                            MIN(p.castrado) AS castrado, 
                                            MIN(r.raca) AS raca, 
                                            MIN(e.ds_especie) AS ds_especie
                                        FROM 
                                            tb_consulta AS cons
                                        INNER JOIN 
                                            tb_paciente AS p ON cons.paciente_id = p.id
                                        INNER JOIN 
                                            tb_especie AS e ON p.especie_id = e.id
                                        INNER JOIN 
                                            tb_racas AS r ON r.especie_id = e.id
                                        INNER JOIN 
                                            tb_clinica AS clini ON cons.clinica_id = clini.id
                                        WHERE 
                                            cons.clinica_id = $id;";

                                            $resultado3 = $mysqli->query($select3);
                                            if ($resultado3->num_rows > 0) {
                                                while ($dados3 = $resultado3->fetch_array()) {

                                                    $nm_animal = $dados3['nm_animal'];
                                                    $idade = $dados3['idade'];
                                                    $peso = $dados3['peso'];
                                                    // $ds_medicacao = $dados['ds_medicacao']; 
                                                    // $tipo_exame = $dados['tipo_exame'];
                                                    $cor = $dados3['cor'];
                                                    $sexo = $dados3['sexo'];
                                                    $castrado = $dados3['castrado'];
                                                    $raca = $dados3['raca'];
                                                    $ds_especie = $dados3['ds_especie'];

                                                    $card3 = "
                                                    <thead>
                                                    <tr>
                                                    <td> $nm_animal </td>
                                                    <td> $idade </td>
                                                    <td> $peso </td>
                                                    <td> $cor </td>
                                                    <td> $sexo </td>
                                                    <td> $castrado </td>
                                                    <td> $raca   </td>
                                                    <td> $ds_especie </td>
                                                    </tr>
                                                    </thead>
                                </div>
                            </div>
                        </div>";
                                                    echo $card3;

                                                }
                                            } else {
                                                echo "<script>alert('Nenhuma Consulta encontrada para hoje!'); window.location.href = 'user.php';</script>";

                                            }
                                            ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>













            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Lif4Pets</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Modal Sair-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deseja sair?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Clique em sair logo abaixo para confirmar logout!</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-danger" href="logout.php">Sair</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="js/sb-admin-2.min.js"></script> <!--botao do sidebar-->

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>
