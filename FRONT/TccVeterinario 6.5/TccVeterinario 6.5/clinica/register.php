
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrar Clínica</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilobuton.css">
    <style>
        .label-input {
            display: block;
            margin-bottom: 5px;
        }

        .border-separated {
            display: flex;
            align-items: center;
            justify-content: space-between;
            /* Para espaçar os elementos uniformemente */
            border: 1px solid #ccc;
            /* Adiciona uma borda */
            border-radius: 20px;
            /* Arredonda as bordas */
            padding: 5px;
            /* Espaçamento interno */
        }

        .border-separated select,
        .border-separated input[type="time"] {
            flex: 1;
            border: none;
            /* Remove as bordas dos selects e inputs de tempo */
            outline: none;
            /* Remove o contorno ao focar */
        }

        .border-separated select {
            margin-right: 5px;
            /* Adiciona um espaço entre o select e o input de tempo */
        }

        .border-separated::before,
        .border-separated::after {
            content: '';
            display: block;
            width: 1px;
            height: 80%;
            /* Altura da linha vertical */
            background-color: #ccc;
            margin: 0 5px;
            /* Espaçamento horizontal */
        }
    </style>
</head>

<body style="background-color: rgb(0, 201, 221);">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Crie uma conta!</h1>
                            </div>
                            <form class="user" method="post" action="cadastro.php" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <!-- nome -->
                                    <div class="col-md-6">
                                        <label class="label-input" for="nm_unidade">Nome:</label>
                                        <input name="nm_unidade" class="form-control form-control-user" type="text"
                                            placeholder="Nome">
                                    </div>
                                    <!-- email -->
                                    <div class="col-md-6">
                                        <label class="label-input" for="email">Email:</label>
                                        <input name="email" class="form-control form-control-user" type="email"
                                            placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <!-- cnpj -->
                                    <div class="col-md-6">
                                        <label class="label-input" for="cnpj">CNPJ:</label>
                                        <input name="cnpj" class="form-control form-control-user" type="text"
                                            placeholder="CNPJ">
                                    </div>
                                    <!-- celular  -->
                                    <div class="col-md-6">
                                        <label class="label-input" for="celular">CEL:</label>
                                        <input name="celular" class="form-control form-control-user" type="text"
                                            placeholder="CEL">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <!-- Login -->
                                    <div class="col-sm-6">
                                        <label class="label-input" for="login">Login: </label>
                                        <input name="login" class="form-control form-control-user" type="text"
                                            placeholder="Login">
                                    </div>
                                    <!-- senha -->
                                    <div class="col-sm-6">
                                        <label class="label-input" for="senha">Senha: </label>
                                        <input name="senha" class="form-control form-control-user" type="password"
                                            placeholder="Senha">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <!-- cep -->
                                    <div class="col-sm-6">
                                        <label class="label-input" for="cep">Cep: </label>
                                        <!-- campo de CEP -->
                                        <input name="cep" id="cep" class="form-control form-control-user" type="text"
                                            placeholder="CEP" oninput="buscaCEP()">

                                    </div>

                                    <!-- estado -->
                                    <div class="col-sm-6">
                                        <label class="label-input" for="estado">Estado: </label>
                                        <input name="estado" id="estado" class="form-control form-control-user"
                                            type="text" placeholder="Estado">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <!-- cidade -->
                                    <div class="col-sm-6">
                                        <label class="label-input" for="cidade">Cidade: </label>
                                        <input name="cidade" id="cidade" class="form-control form-control-user"
                                            type="text" placeholder="Cidade">
                                    </div>
                                    <!-- bairro -->
                                    <div class="col-sm-6">
                                        <label class="label-input" for="bairro">Bairro: </label>
                                        <input name="bairro" id="bairro" class="form-control form-control-user"
                                            type="text" placeholder="Bairro">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <!-- rua -->
                                    <div class="col-sm-6">
                                        <label class="label-input" for="rua">Rua: </label>
                                        <input name="rua" id="rua" class="form-control form-control-user" type="text"
                                            placeholder="Rua">
                                    </div>
                                    <!-- numero -->
                                    <div class="col-sm-6">
                                        <label class="label-input" for="nr_end">Número: </label>
                                        <input name="nr_end" class="form-control form-control-user" type="text"
                                            placeholder="Número">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label >Imagem:</label>
                                            <input type="file" name="imagem" accept="image/*" class="form-control" >
                                    </div>
                                </div>

                                <div class="text-center">
                                    <h1 class="h4 text-gray-900  p-2">Horário de Funcionamento:</h1>
                                </div>




                                <!-- Domingo -->
                                <label class="label-input" for="domingo">Domingo:</label>
                                <div class="border-separated rounded-pill p-2">
                                    <select id="status_domingo" name="status_domingo"
                                        onchange="habilitarHorario('domingo')">
                                        <option type="text" value="fechado">Fechado</option>
                                        <option type="text" value="aberto">Aberto</option>
                                    </select>
                                    <input class="border-right border-dark m-1" type="time" id="domingo_abertura"
                                        name="domingo_abertura" disabled> -
                                    <input class="m-1" type="time" id="domingo_fechamento" name="domingo_fechamento"
                                        disabled>
                                </div>

                                <!-- Segunda-feira -->
                                <label class="label-input pt-2" for="segunda">Segunda-feira:</label>
                                <div class="border-separated rounded-pill p-2">
                                    <select class="border-right border-dark" id="status_segunda" name="status_segunda"
                                        onchange="habilitarHorario('segunda')">
                                        <option type="text" value="fechado">Fechado</option>
                                        <option type="text" value="aberto">Aberto</option>
                                    </select>
                                    <input class="border-right border-dark m-1" type="time" id="segunda_abertura"
                                        name="segunda_abertura" disabled>
                                    <input class="m-1" type="time" id="segunda_fechamento" name="segunda_fechamento"
                                        disabled>
                                </div>

                                <!-- Terça-feira -->
                                <label class="label-input pt-2" for="terca">Terça-feira:</label>
                                <div class="border-separated rounded-pill p-2">
                                    <select class="border-right border-dark" id="status_terca" name="status_terca"
                                        onchange="habilitarHorario('terca')">
                                        <option type="text" value="fechado">Fechado</option>
                                        <option type="text" value="aberto">Aberto</option>
                                    </select>
                                    <input class="border-right border-dark m-1" type="time" id="terca_abertura"
                                        name="terca_abertura" disabled> -
                                    <input class="m-1" type="time" id="terca_fechamento" name="terca_fechamento"
                                        disabled>
                                </div>

                                <!-- Quarta-feira -->
                                <label class="label-input pt-2" for="quarta">Quarta-feira:</label>
                                <div class="border-separated rounded-pill p-2">
                                    <select class="border-right border-dark" id="status_quarta" name="status_quarta"
                                        onchange="habilitarHorario('quarta')">
                                        <option type="text" value="fechado">Fechado</option>
                                        <option type="text" value="aberto">Aberto</option>
                                    </select>
                                    <input class="border-right border-dark m-1" type="time" id="quarta_abertura"
                                        name="quarta_abertura" disabled> -
                                    <input class="m-1" type="time" id="quarta_fechamento" name="quarta_fechamento"
                                        disabled>
                                </div>

                                <!-- Quinta-feira -->
                                <label class="label-input pt-2" for="quinta">Quinta-feira:</label>
                                <div class="border-separated rounded-pill p-2">
                                    <select id="status_quinta" name="status_quinta"
                                        onchange="habilitarHorario('quinta')">
                                        <option type="text" value="fechado">Fechado</option>
                                        <option type="text" value="aberto">Aberto</option>
                                    </select>
                                    <input class="border-right border-dark m-1" type="time" id="quinta_abertura"
                                        name="quinta_abertura" disabled> -
                                    <input class="m-1" type="time" id="quinta_fechamento" name="quinta_fechamento"
                                        disabled>
                                </div>
                                <!-- Sexta-feira -->

                                <label class="label-input pt-2" for="sexta">Sexta-feira:</label>
                                <div class="border-separated rounded-pill p-2">
                                    <select id="status_sexta" name="status_sexta" onchange="habilitarHorario('sexta')">
                                        <option type="text" value="fechado">Fechado</option>
                                        <option type="text" value="aberto">Aberto</option>
                                    </select>
                                    <input class="border-right border-dark m-1" type="time" id="sexta_abertura"
                                        name="sexta_abertura" disabled> -
                                    <input class="m-1" type="time" id="sexta_fechamento" name="sexta_fechamento"
                                        disabled>
                                </div>


                                <!-- Sábado -->
                                <label class="label-input pt-2" for="sabado">Sábado:</label>
                                <div class="border-separated rounded-pill p-2 ">
                                    <select id="status_sabado" name="status_sabado"
                                        onchange="habilitarHorario('sabado')">
                                        <option type="text" value="fechado">Fechado</option>
                                        <option type="text" value="aberto">Aberto</option>
                                    </select>
                                    <input class="border-right border-dark m-1" type="time" id="sabado_abertura"
                                        name="sabado_abertura" disabled> -
                                    <input class="m-1" type="time" id="sabado_fechamento" name="sabado_fechamento"
                                        disabled>
                                </div>
                                <div class="pt-4">
                                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Cadastrar">
                                </div>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.php">Esqueceu a senha?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Já tem conta? Faça o login!</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="../index.php">Voltar</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function habilitarHorario(dia) {
            var status = document.getElementById("status_" + dia).value;
            var aberturaInput = document.getElementById(dia + "_abertura");
            var fechamentoInput = document.getElementById(dia + "_fechamento");

            // Habilita ou desabilita os campos de entrada de acordo com a seleção
            if (status === "aberto") {
                aberturaInput.disabled = false;
                fechamentoInput.disabled = false;
            } else {
                aberturaInput.disabled = true;
                fechamentoInput.disabled = true;
            }
        }
    </script>




    <script>
        function buscaCEP() {
            var cep = document.getElementById('cep').value;
            cep = cep.replace(/\D/g, ''); // Remove caracteres não numéricos

            // Verifica se o CEP possui 8 dígitos
            if (cep.length == 8) {
                console.log("CEP digitado: " + cep); // Depuração: verifica se o CEP está sendo capturado corretamente

                // Faz a requisição AJAX para o ViaCEP
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "https://viacep.com.br/ws/" + cep + "/json/", true);
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        var response = JSON.parse(xhr.responseText);
                        console.log("Resposta do ViaCEP: ", response); // Depuração: verifica a resposta do ViaCEP

                        if (!response.erro) {
                            // Preenche os campos de endereço com os dados do ViaCEP
                            document.getElementById('estado').value = response.uf;
                            document.getElementById('cidade').value = response.localidade;
                            document.getElementById('bairro').value = response.bairro;
                            document.getElementById('rua').value = response.logradouro;
                            // Você pode preencher outros campos de endereço, se necessário
                        } else {
                            alert("CEP não encontrado.");
                        }
                    }
                };
                xhr.send();
            }
        }
    </script>




    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>