<?php
session_start();
include('../conexao.php')
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Life4Pets</title>

    <!-- Custom fonts for this template-->
    <link href="../vendorUser/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../cssUser/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<?php include ('header.php'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- HEADER CONTEÚDO -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Clínicas</h1>
                    </div>

                    <?php
    
    $select2 = "  SELECT  clini.nm_unidade, clini.id, clini.estado, clini.cidade, clini.bairro, clini.rua, clini.nr_end, clini.cep, clini.imagem
	FROM tb_clinica as clini    
            ;";



 

        // Executar a consulta

            // Obter resultados
            $result2 = $mysqli->query($select2);
            while($dados2 = $result2->fetch_array()){
                $cliniid = $dados2['id'];
                $imagemc = $dados2['imagem'];
                $nm_unidadec = $dados2['nm_unidade'];
                $estadoc = $dados2['estado'];
                $cidadec = $dados2['cidade'];
                $bairroc = $dados2['bairro'];
                $ruac = $dados2['rua'];
                $nr_endc = $dados2['nr_end'];
                $cepc = $dados2['cep'];


               
                $card = "
                <div class='col-lg-6'>
                    <div class='card shadow mb-4'>
                        <div class='card-header py-3'>
                            <h6 class='m-0 font-weight-bold text-dark'> $nm_unidadec</h6>
                        </div>
                        <div class='card-body'>
                            <p>Localização: $ruac , $nr_endc  - $bairroc, $cidadec, $estadoc</p>
                            <p>CEP: $cepc </p>
                            $cliniid

                        </div>
                        <div class='card-footer text-muted'>
                            <form action='agendamentocli.php' method='POST'>
                                <input type='hidden' name='clinica' value='" . htmlspecialchars($nm_unidadec) . "'>
                                <input type='hidden' name='id' value='" . htmlspecialchars($cliniid) . "'>
                                <button type='submit' class='btn' style='background-color: rgb(0, 201, 221); color: white;'>Agendar</button>
                            </form>
                        </div>
                    </div>
                </div>";
            echo $card;

            
            }
?>
                    <!-- <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            const cardsContainer = document.getElementById('cardsContainer');
                            const addCardBtn = document.getElementById('addCardBtn');
                            let cardCount = 0;

                            addCardBtn.addEventListener('click', function () {
                                const newCard = `
                                    <div class="col-lg-6">
                                        <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                                <h6 class="m-0 font-weight-bold text-dark">Nome da clínica ${cardCount + 1}</h6>
                                            </div>
                                            <div class="card-body">
                                                <p>Informações da clínica</p>
                                                <p>Localização da clínica</p>
                                                <p>Animais que atendem</p>
                                            </div>
                                            <div class="card-footer text-muted">
                                                <a href="#" class="btn" style="background-color: rgb(0, 201, 221); color: white;">Agendar</a>
                                            </div>
                                        </div>
                                    </div>
                                `;
                                cardsContainer.innerHTML += newCard;

                                // Adiciona um contador para alternar entre as colunas
                                cardCount++;
                                if (cardCount % 2 === 0) {
                                    // Se cardCount é par, adicionar uma nova linha
                                    cardsContainer.innerHTML += `<div class="w-100"></div>`;
                                }
                            });
                        });
                    </script>
                </div>
            </div> -->
                    </div>
            <!-- End of Main Content -->

<?php include ('footer.php'); ?>

</body>

</html>