<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lif4Pets- Register</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

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
                            <form class="user" method="post" action="cadastro.php">

                                <div class="form-group row">
                                    <!-- nome -->
                                    <div class="col-sm-6">
                                        <label class="label-input" for="nm_responsavel">Nome: </label>
                                        <input name="nm_responsavel" class="form-control form-control-user" type="text"
                                            placeholder="Nome">
                                    </div>

                                    <!-- email -->
                                    <div class="col-sm-6">
                                        <label class="label-input" for="email">Email: </label>
                                        <input name="email" class="form-control form-control-user" type="email"
                                            placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <!-- Cpf -->
                                    <div class="col-sm-6">
                                        <label class="label-input" for="documento_cpf">CPF: </label>
                                        <input name="documento_cpf" class="form-control form-control-user" type="text"
                                            placeholder="CPF">
                                    </div>

                                    <!-- Celular -->
                                    <div class="col-sm-6">
                                        <label class="label-input" for="celular">Celular: </label>
                                        <input name="celular" class="form-control form-control-user" type="text"
                                            placeholder="CEL">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <!-- Login -->
                                    <div class="col-sm-6">
                                        <label class="label-input" for="login">Login: </label>
                                        <input name="login" class="form-control form-control-user" type="text"
                                            placeholder="Nome Login">
                                    </div>

                                    <!-- Senha -->
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

                                    <!-- Número -->
                                    <div class="col-sm-6">
                                        <label class="label-input" for="nr">Número: </label>
                                        <input name="nr" class="form-control form-control-user" type="text"
                                            placeholder="Número">
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-primary btn-user btn-block" value="Cadastrar">
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
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>