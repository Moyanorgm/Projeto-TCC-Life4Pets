<?php
session_start();
include('../conexao.php');
include ('header.php');
?>
<br>
<div class="container-fluid">
                    <!-- HEADER CONTEÚDO -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-0 font-weight-bold text-center">Meus Pets</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>Nome do animal</th>
                                        <th> idade </th>
                                        <th> Peso </th>
                                        <th>  Cor</th>
                                        <th> Sexo </th>
                                        <th> Castrado </th>
                                        <th>  Raça</th>
                                        <th> Especie </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php


                                            $select3 = "SELECT 
                                            p.cliente_id, 
                                            MIN(p.nm_animal) AS nm_animal, 
                                            MIN(p.idade) AS idade, 
                                            MIN(p.peso) AS peso, 
                                            MIN(p.cor) AS cor, 
                                            MIN(p.sexo) AS sexo, 
                                            MIN(p.castrado) AS castrado, 
                                            MIN(r.raca) AS raca, 
                                            MIN(e.ds_especie) AS ds_especie
                                        FROM 
                                            tb_paciente AS p 
                                        INNER JOIN 
                                            tb_especie AS e ON p.especie_id = e.id
                                        INNER JOIN 
                                            tb_racas AS r ON r.especie_id = e.id
                                        INNER JOIN 
                                            tb_cliente AS c ON p.cliente_id = c.id
                                        WHERE 
                                            p.cliente_id = $id
                                        GROUP BY 
                                            p.cliente_id, p.nm_animal; ";

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
