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

<script>
        function InputVazio() {
            // Obtém o valor do campo
            var nm_responsavel = document.getElementById("nm_responsavel").value;
            
            // Verifica se o campo está vazio
            if (nm_responsavel.trim() == "") {
                // Mostra um alerta
                alert("Por favor, preencha o campo.");
                // Impede o envio do formulário
                return false;
            }
            return true;
        }
    </script>

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
                                        <input id="nm_responsavel" name="nm_responsavel" class="form-control form-control-user" type="text"
                                            placeholder="Nome" onsubmit="return InputVazio()">
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
                                    <!-- Cep -->
                                    <div class="col-sm-6">
                                        <label class="label-input" for="cep">Cep: </label>
                                        <input name="cep" class="form-control form-control-user" type="text"
                                            placeholder="CEP">
                                    </div>

                                    <div class="col-sm-6">
                                        <label class="label-input" for="estado">Estado: </label>
                                        <input name="estado" class="form-control form-control-user" type="text"
                                            placeholder="Estado">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <!-- Cidade -->
                                    <div class="col-sm-6">
                                        <label class="label-input" for="cidade">Cidade: </label>
                                        <input name="cidade" class="form-control form-control-user" type="text"
                                            placeholder="Cidade">
                                    </div>

                                    <!-- Bairro -->
                                    <div class="col-sm-6">
                                        <label class="label-input" for="bairro">Bairro: </label>
                                        <input name="bairro" class="form-control form-control-user" type="text"
                                            placeholder="Bairro">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <!-- Rua -->
                                    <div class="col-sm-6">
                                        <label class="label-input" for="rua">Rua: </label>
                                        <input name="rua" class="form-control form-control-user" type="text"
                                            placeholder="Rua">
                                    </div>

                                    <!-- Número -->
                                    <div class="col-sm-6">
                                        <label class="label-input" for="nr">Número: </label>
                                        <input name="nr" class="form-control form-control-user" type="text"
                                            placeholder="Número">
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-primary btn-user btn-block" value="Cadastrar" name="bt_cadastrar">
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

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>