<?php

include_once('index.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
    


<div class="container">
        <div class="rows">
            <div class="col mt-2">
            <form method="POST">
    <legend>Cadastrar</legend>            
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <input placeholder="Usuário" type="text" name="usuario" id="usuario" class="form-control" >
    </div>
    <div class="mb-3">
        <input placeholder="Senha" type="password" name="senha" id="senha" class="form-control"  >
    </div>
    <div class="mb-3">
        <input placeholder="Nome completo" type="text" name="nome" id="nome" class="form-control" >
    </div>
    <div class="mb-3">
        <input placeholder="E-mail" type="email" name="email" id="email" class="form-control" >
    </div>
    <div class="mb-3">
        <input type="date" name="nascimento" id="nascimento" class="form-control" >
    </div>
    <div class="mb-3">
        <input placeholder="Telefone" type="text" name="telefone" id="telefone" class="form-control" >
    </div>
    </div class="mb-3">
    <select placeholder="genero" name="genero" id="genero" class="form-control">
            <option value="Gênero" id="Gênero">Gênero</option>
            <option value="Masculino" id="Masculino">Masculino</option>
            <option value="Feminino" id="Feminino">Feminino</option>
            <option value="Outros" id="Outros">Outros</option>
        </select>
        <div><br>
    <div class="mb-3">
    <select placeholder="Estado" type="text" name="estado" id="estado" class="form-control">
        <option value="Estado" id="Estado">Estado</option>        
        <option value="acre" id="acre">Acre</option>
        <option value="alagoas" id="alagoas">Alagoas</option>
        <option value="Amapa" id="Amapa">Amapá</option>
        <option value="amazonas" id="amazonas">Amazonas</option>
        <option value="bahia" id="bahia">Bahia</option>
        <option value="ceara" id="ceara">Ceará</option>
        <option value="espirito santo" id="espirito santo">Espírito Santo</option>
        <option value="ceara" id="ceara">Ceará</option>
        <option value="goias" id="goias">Goiás</option>
        <option value="maranhao" id="maranhao">Maranhão</option>
        <option value="mato grosso" id="mato grosso">Mato Grosso</option>
        <option value="mato grosso do sul" id="mato grosso do sul">Mato Grosso Sul</option>
        <option value="minas gerais" id="minas gerais">Minas Gerais</option>
        <option value="para" id="para">Pará</option>
        <option value="paraiba" id="paraiba">Paraíba</option>
        <option value="parana" id="parana">Paraná</option>
        <option value="pernambuco" id="pernambuco">Pernambuco</option>
        <option value="piaui" id="piaui">Piauí</option>
        <option value="rio de janeiro" id="rio de janeiro">Rio de Janeiro</option>
        <option value="rio grande do norte" id="rio grande do norte">Rio Grande do Norte</option>
        <option value="rio grande do sul" id="rio grande do sul">Rio Grande do Sul</option>
        <option value="rondonia" id="rondonia">Rondônia</option>
        <option value="roraima" id="roraima">Roraima</option>
        <option value="santa catarina" id="santa catarina">Santa Catarina</option>
        <option value="sao paulo" id="sao paulo">São Paulo</option>
        <option value="sergipe" id="sergipe">Sergipe</option>
        <option value="tocantins" id="tocantins">Tocantins</option>
        <option value="distrito federal" value="distrito federal">Distrito Federal</option>
        </select>
    </div>
    <div class="mb-3">
        <input placeholder="Cidade" type="text" name="cidade" id="cidade" class="form-control" >
    </div>
    <div class="mb-3">
        <input placeholder="Endereço" type="text" name="endereco" id="endereco" class="form-control" >
    </div>
        <input type="submit" name="submit" id="submit" value="Enviar" class="form-control">
</form>

            
            </div>
        </div>
    </div>

</body>
</html>
<?php
if(isset($_POST['submit']))
{
    include_once('config.php');
    $usuario = ($_POST['usuario']);
    $senha = md5($_POST['senha']);
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
    $nascimento = $_POST['nascimento'];

    $sql = "INSERT INTO usuarios (usuario, senha , nome, email, telefone, genero, cidade, estado, endereco, nascimento)
VALUES ('$usuario','$senha','$nome', '$email', '$telefone','$genero','$cidade','$estado','$endereco','$nascimento')";

if
 (mysqli_query($conexao, $sql)) {
  echo "<script> alert('Cadastrado com sucesso!') </script>";
  echo "<script> location.href='cadastros.php';</script>";
} else {
  echo "Erro ao cadastrar " . $sql . "<br>" . mysqli_error($conexao);
}

mysqli_close($conexao);
}
?>