<?php
    $nome = $_POST['campoNome'];
    $email = $_POST['campoEmail'];
    $ender = $_POST['campoEnder'];
    $msg = $_POST['campoMsg'];
    $radio = $_POST['campoRadio']
    $contra = $_POST['campoRadio']
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
    <h1>Dados Recebidos</h1>
    <p><b>Nome: </b><?php echo $nome; ?></p>
    <p><b>Email: </b><?php echo $email; ?></p>
    <p><b>Endereço: </b><?php echo $ender; ?></p>
    <p><b>Dúvidas: </b><?php echo $msg; ?></p>
    <p><b>Tipo de compra:</b><?php echo $radio; ?></p>
    <p><b>Assinou o contrato:</b><?php echo $contra; ?></p>
    
</body>
</html>