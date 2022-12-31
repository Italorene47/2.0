<?php
include('index.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastros</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
    <div class="table-responsive">
        <table class="table">
        <script src="js/bootstrap.bundle.min.js"></script>
    <br><br><button class='btn btn-success' onclick="location.href='registrar.php?acao=entrar'">Cadastrar</button><br><br>
    <script src="js/bootstrap.bundle.min.js"></script>
    <?php
include('config.php');
$sql = "SELECT * FROM cadastros.usuarios";
$res = mysqli_query($conexao, $sql);

if(mysqli_num_rows($res) > 0) {
    echo"<table class='table table-hover table-striped table-bordered'>";
    echo "<th> ID </th>";
    echo "<th> Nome </th>";
    echo "<th> Usuário </th>";
    echo "<th> E-mail </th>";
    echo "<th> Telefone </th>";
    echo "<th> Genero </th>";
    echo "<th> Estado </th>";
    echo "<th> Cidade </th>";
    echo "<th> Ações </th>";

    
    while($row = $res-> fetch_object()){
        echo "<tr>";
        echo "<td>" . $row->id . "</td>";
        echo "<td>" . $row->nome . "</td>";
        echo "<td>" . $row->usuario . "</td>";
        echo "<td>" . $row->email . "</td>";
        echo "<td>" . $row->telefone . "</td>";
        echo "<td>" . $row->genero . "</td>";
        echo "<td>" . $row->estado . "</td>";
        echo "<td>" . $row->cidade . "</td>";
        echo "<td> <button onclick=\"location.href='editar_cadastros.php?acao=editar&id=".$row->id."';\" 
        class='btn btn-success'> Editar </button> <button onclick=\"location.href='excluir_cadastros.php?acao=excluir&id=".$row->id."';\" class='btn btn-danger'> Excluir </button>" . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    
}

?>

        </table>

    </div>
    
</body>
</html>

