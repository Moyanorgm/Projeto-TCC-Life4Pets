<?php
session_start();
include ('../conexao.php');



?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Life4Pets - Perfil</title>

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

<div class="container">
<div class="main-body">
<div class="row">
<div class="col-lg-4">
<div class="card">
<div class="card-body">
<div class="d-flex flex-column align-items-center text-center">
<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
<div class="mt-3">
<h4><?php echo $nm_responsavel; ?></h4>
<p class="text-secondary mb-1">Cliente</p>
<p class="text-muted font-size-sm"><?php echo $cidade . ", " . $bairro . ", " . $rua . ", " . $nr ; ?></p>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Alterar
</button>

<!-- O modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Formulário de Alteração</h1>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo $resultado?>" method="post" enctype="multipart/form-data">
          <!-- Seu formulário aqui -->
          <div class="form-group">
            <label for="imagem">Selecione uma imagem:</label>
            <input type="file" class="form-control-file" id="imagem" name="imagem">
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>







</div>
</div>
<hr class="my-4">
</div>
</div>
</div>
<div class="col-lg-8">
<div class="card">
<div class="card-body">
<div class="row mb-3">
<div class="col-sm-3">
<h6 class="mb-0">Nome</h6>
</div>
<div class="col-sm-9 text-secondary">
<input type="text" class="form-control" value="<?php echo $nm_responsavel ; ?>">
</div>
</div>
<div class="row mb-3">
<div class="col-sm-3">
<h6 class="mb-0">Email</h6>
</div>
<div class="col-sm-9 text-secondary">
<input type="text" class="form-control" value="<?php echo $email ?>">
</div>
</div>
<div class="row mb-3">
<div class="col-sm-3">
<h6 class="mb-0">Celular</h6>
</div>
<div class="col-sm-9 text-secondary">
<input type="text" class="form-control" value="<?php echo $celular ; ?>">
</div>
</div>
<div class="row mb-3">
<div class="col-sm-3">
<h6 class="mb-0">CEP</h6>
</div>
<div class="col-sm-9 text-secondary">
<input type="text" class="form-control" value="<?php echo $cep ; ?>">
</div>
</div>
<div class="row mb-3">
<div class="col-sm-3">
<h6 class="mb-0">Estado</h6>
</div>
<div class="col-sm-9 text-secondary">
<input type="text" class="form-control" value="<?php echo $estado ; ?>">
</div>
</div>
<div class="row mb-3">
<div class="col-sm-3">
<h6 class="mb-0">Cidade</h6>
</div>
<div class="col-sm-9 text-secondary">
<input type="text" class="form-control" value="<?php echo $cidade ; ?>">
</div>
</div>
<div class="row mb-3">
<div class="col-sm-3">
<h6 class="mb-0">Bairro</h6>
</div>
<div class="col-sm-9 text-secondary">
<input type="text" class="form-control" value="<?php echo $bairro ; ?>">
</div>
</div>
<div class="row mb-3">
<div class="col-sm-3">
<h6 class="mb-0">Rua</h6>
</div>
<div class="col-sm-9 text-secondary">
<input type="text" class="form-control" value="<?php echo $rua ; ?>">
</div>
</div>
<div class="row mb-3">
<div class="col-sm-3">
<h6 class="mb-0">Numero</h6>
</div>
<div class="col-sm-9 text-secondary">
<input type="text" class="form-control" value="<?php echo $nr ; ?>">
</div>
</div>
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-9 text-secondary">
<input type="button" class="btn btn-primary px-4" value="Salvar Informações">
</div>
</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
// Quando o documento estiver pronto
$(document).ready(function(){
  // Quando o botão "Alterar" for clicado
  $("#btnAlterar").click(function(){
    // Mostrar o modal
    $("#exampleModal").modal("show");
  });

  // Quando o modal for fechado
  $('#exampleModal').on('hidden.bs.modal', function () {
    // Limpar o formulário, se necessário
    $("#imagem").val(""); // Limpa o campo de seleção de arquivo
  });
});
</script>

<!-- Bootstrap JavaScript (opcional, necessário para modal) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php include ('footer.php'); ?>

</body>

</html>