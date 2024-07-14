<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once "route.php";
if (!empty($_POST['form_submit'])) {
    rotas($_POST['acao']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    cript>
    <title>Document</title>
</head>

<body>
    <form action="viewRoute.php" method="post">
        <input TYPE="hidden" NAME="form_submit" VALUE="OK">
        <div class='col-sm-4'>
            <button type="submit" name="acao" value="cadastar/0" class="btn btn-primary btn-block">
                <b>Cadastar</b> </button>
        </div>
        <div class='col-sm-4'>
            <button type="submit" name="acao" value="alterar/1" class="btn btn-success btn-block">
                <b>Alterar</b> </button>
        </div>
        <div class='col-sm-4'>
            <button type="submit" name="acao" value="remover/2" class="btn btn-danger btn-block">
                <b>Remover</b> </button>
        </div>
    </form>
</body>

</html>