<?php

session_start();
include('../conexao.php');

// Consulta SQL para selecionar todos os registros da tabela tb_paciente
$sql = " SELECT raca_id, especie, raca, especie_id FROM (SELECT e.id AS especie_id, e.ds_especie AS especie, r.raca AS raca, r.id AS raca_id, ROW_NUMBER() OVER (PARTITION BY e.id, e.ds_especie ORDER BY e.id) AS row_num
FROM tb_racas AS r
INNER JOIN tb_especie AS e ON r.especie_id = e.id) AS sub
WHERE row_num = 1;";


$result = $mysqli->query($sql);

$pets = [];

// Verificando se há registros retornados pela consulta
if ($result->num_rows > 0) {
    // Iterando sobre cada linha de resultados
    while ($row = $result->fetch_assoc()) {
        // Adicionando os dados do pet ao array
        $pet = [
            'especie' => $row["especie"],
            'raca' => $row["raca"],
            'raca_id' => $row["raca_id"],
            'especie_id' => $row["especie_id"]
      ];

        // Adicionando o pet ao array de pets
        array_push($pets, $pet);
    }
} else {
    echo "Não foram encontrados registros na tabela.";
}




// // Consulta SQL para selecionar todos os registros da tabela tb_paciente
// $sql1 = " SELECT e.id AS especie_id, e.ds_especie AS especie, r.raca AS raca, r.id AS raca_id
// FROM tb_racas AS r
// INNER JOIN tb_especie AS e ON r.especie_id = e.id
// ;";


// $result1 = $mysqli->query($sql1);

// $pets1 = [];

// // Verificando se há registros retornados pela consulta
// if ($result1->num_rows > 0) {
//     // Iterando sobre cada linha de resultados
//     while ($row1 = $result1->fetch_assoc()) {
//         // Adicionando os dados do pet ao array
//         $pet1 = [
//             'especie' => $row1["especie"],
//             'raca' => $row1["raca"],
//             'raca_id' => $row1["raca_id"],
//             'especie_id' => $row1["especie_id"]
//       ];

//         // Adicionando o pet ao array de pets
//         array_push($pets1, $pet1);
//     }
// } else {
//     echo "Não foram encontrados registros na tabela.";
// }

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



                            <form class="user" method="post" action="cadastraPet.php">
                                <div class="col-sm-3 col-sm-offset-3 text-center">
                                    <?php $cliente_id = $id; ?>
                                    <label>Nome: <?php echo $nm_responsavel; ?></label>
                                    <input type="hidden" name="cliente_id" value="<?php echo $cliente_id; ?>">
                                </div>

                                <div class="form-group row">
                                    <!-- nome -->
                                    <div class="col-md-6">
                                        <label class="label-input" for="nm_animal">Nome do animal:</label>
                                        <input name="nm_animal" class="form-control form-control-user" type="text"
                                            placeholder="Nome do animal">
                                    </div>
                                    <!-- email -->
                                    <div class="col-md-6">
                                        <label class="label-input" for="idade">idade:</label>
                                        <input name="idade" class="form-control form-control-user" type="number"
                                            placeholder="idade">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-sm-offset-3">
                                    <label> Especie</label>
                                    <select name="especie_id" class="form-control">
                                        <option value="">Selecione uma especie</option>
                                        <?php foreach ($pets as $pet): ?>
                                            <option value="<?php  echo $pet['especie_id']; ?>"><?php echo $pet['especie']; ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                    
                                </div>
                                <div class="form-group row">
                                    <!-- cnpj -->
                                    <div class="col-md-6">
                                        <label class="label-input" for="peso">peso:</label>
                                        <input name="peso" class="form-control form-control-user" type="text"
                                            placeholder="peso">
                                    </div>
                                    <!-- celular  -->
                                    <div class="col-md-6">
                                        <label class="label-input" for="cor">cor:</label>
                                        <input name="cor" class="form-control form-control-user" type="text"
                                            placeholder="cor">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <!-- Login -->
                                    
                                    <div class="col-sm-6">

                                    <label> Sexo</label>
                                    <select name="sexo" class="form-control">
                                        <option value="">Selecione o sexo</option>
                                            <option value="Macho">Macho</option>
                                            <option value="Femea">Femea</option>
                                    </select>
                                    </div>
                                    <!-- senha -->
                                    <div class="col-sm-6">

                                    <label> Castrado</label>
                                    <select name="castrado" class="form-control">
                                        <option value="">Selecione uma opção</option>
                                            <option value="Sim">Sim</option>
                                            <option value="Não">Não</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="pt-4">
                                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Cadastrar">
                                </div>
                            </form>


















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
    <script src="../vendor/jquery/jquery.min.js"></script> <!--serve pra tabela tambem-->
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script> <!--botao do sidebar-->

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <!--Js pra funcionar os filtros da tabela-->
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>