<?php
    include ('../conexao.php');
    if(isset($_SESSION['user'])){
        $userId = $_SESSION['user'];
        ///////////////////
    
    
        
    ///////////
    //     $sql = "SELECT * FROM tb_login WHERE id = ?";
    //     if ($stmt = $mysqli->prepare($sql)) {
    //         // Vincula o parâmetro
    //         $stmt->bind_param("i", $userId);
            
    //         // Executa a consulta
    //         $stmt->execute();
            
    //         // Obtém o resultado da consulta
    //         $result = $stmt->get_result();
            
    //         // Verifica se algum resultado foi retornado
    //         if ($result->num_rows > 0) {
    //             // Exibe as informações do usuário
    //             $userData = $result->fetch_assoc();
    //             $email = $userData['email'];
                    

    //             // Exibe outras informações do usuário conforme necessário
    //         } else {
    //             echo "Nenhuma informação encontrada para o ID de usuário: $userId";
    //         }
            
    //         // Fecha o statement
    //         $stmt->close();
    //     } else {
    //         echo "Erro ao preparar a declaração SQL: " . $mysqli->error;
    //     }
        
    //     // Fecha a conexão
    //     $mysqli->close();
        
        
    // } else {
    //     echo "Usuário não autenticado.";
    // }


        // Consulta à tabela tb_login para obter informações básicas do usuário
        $sqlLogin = "SELECT * FROM tb_login_cliente WHERE id = ?";
        if ($stmtLogin = $mysqli->prepare($sqlLogin)) {
            // Vincula o parâmetro
            $stmtLogin->bind_param("i", $userId);
            
            // Executa a consulta
            $stmtLogin->execute();
            
            // Obtém o resultado da consulta
            $resultLogin = $stmtLogin->get_result();
            
            // Verifica se algum resultado foi retornado
            if ($resultLogin->num_rows > 0) {
                // Obtém as informações do usuário da tabela tb_login
                $userData = $resultLogin->fetch_assoc();
                $email = $userData['email'];
    
                // Exibe as informações do usuário
                // echo "Informações do usuário:<br>";
                // echo "Email: $email<br>";
                // Exibe outras informações do usuário conforme necessário
    
                $sql1 = "SELECT * FROM tb_cliente WHERE login_cliente = ?";
                $stmt1 = $mysqli->prepare($sql1);

                if ($stmt1) {
                    // Bind do parâmetro
                    $stmt1->bind_param("i", $userId);

                    // Executar a consulta
                    if ($stmt1->execute()) {
                        // Obter resultados
                        $result1 = $stmt1->get_result();

                        // Verificar se há resultados
                        if ($result1->num_rows > 0) {
                            // Loop através dos resultados
                            while ($row = $result1->fetch_assoc()) {
                                // Fazer algo com os dados
                                $id = $row['id'];
                                $nm_responsavel = $row['nm_responsavel'];
                                $celular = $row['celular'];
                                $cep = $row['cep'];
                                $estado = $row['estado'];
                                $cidade = $row['cidade'];
                                $bairro = $row['bairro'];
                                $rua = $row['rua'];
                                $nr = $row['nr'];
                                
                                // echo "ID: " . $row['id'] . ", Nome: " . $nm_responsavel . "<br>";
                                
                            }
                        } else {
                            echo "Nenhuma informação encontrada para o ID de usuário: $userId";
                        }
                    } 
                    else {
                        echo "Erro ao executar a consulta: " . $stmt1->error;
                    }

                    // Fechar o statement
                    $stmt1->close();
                } else {
                    echo "Erro ao preparar a declaração SQL para consulta à tabela tb_cliente: " . $mysqli->error;
                }
        // Fecha a conexão

            }else {
        echo "Usuário não autenticado.";
    }
}} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Custom fonts for this template-->
    <link href="../vendorUser/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../cssUser/sb-admin-2.min.css" rel="stylesheet">
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar"
            style="background-color: rgb(0, 201, 221);">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
                <div class="sidebar-brand-icon">    
                    <img src="../assets/img/LogoBrancaTotal.png" alt="" width="130rem" class="pt-2" class="primary">
                </div>

            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0 ">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="user.php">
                    <i class="fas fa-search fa-sm"></i>
                    <span>Buscar clínicas</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="minhasConsultas.php">
                    <i class="fas fa-calendar fa-2x"></i>
                    <span>Minhas consultas</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="petsCadastrados.php">
                    <i class="fas fa-list fa-sm fa-fw mr-2"></i>
                    <span>Pets cadastrados</span></a>
            </li>

            <div class="text-center d-none d-md-inline pt-4">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
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
                        style="color:rgb(0, 201, 221); ;">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form action="user.php"
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Buscar clínica. . ." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn" style="background-color: rgb(0, 201, 221); color: white;"
                                    type="button">
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
                                            placeholder="Buscar clínicas. . ." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn"
                                                style="background-color: rgb(0, 201, 221); color: white;" type="button">
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
                                <h6 class="dropdown-header border-0" style="background-color: rgb(0, 201, 221);">
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $email   ?></span>
                                <!-- IMAGEM USUARIO -->
                                <img class="img-profile rounded-circle" src="<?php echo $imagem; ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="perfil.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configurações
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Sair
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->



