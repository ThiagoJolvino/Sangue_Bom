<?php
alert("ola")
include_once('conexao.php');
//capturando os dados da tabela usuario + login
$nome=$_POST['NOME_USUARIO'];
$sobrenome=$_POST['SOBRENOME_USUARIO'];
$email=$_POST['EMAIL_USUARIO'];
$senha=$_POST['SENHA_USUARIO'];
$senha2=$_POST['SENHA_USUARIO2'];
$cpf=$_POST['CPF'];
$rg=$_POST['RG'];
$id_sangue=$_POST['SANGUE'];
$sexo=$_POST['SEXO'];
$data_nascimento=$_POST['DATA_NASCIMENTO'];


//capturando os dados da tabela telefone usuario
$telefone=$_POST['NUM_TELEFONE'];
$cidade=$_POST['CIDADE'];
$estado=$_POST['ESTADO'];
$cep=$_POST['CEP'];
$rua=$_POST['RUA'];
$numero=$_POST['NUMERO'];
$bairro=$_POST['BAIRRO'];



if(!$strcon){
    die("conexão falhou: ".mysqli_connect_error());
}else{
    if($senha == $senha2){ 
    $tblUsuario="INSERT INTO tbl_usuario (id_sangue, nome_usuario, sobrenome_usuario, sexo, cpf, rg, data_nascimento) VALUES ('$id_sangue','$nome', '$sobrenome', '$sexo', '$cpf','$rg', '$data_nascimento')";
    $resultadoInsert = mysqli_query($strcon, $tblUsuario);
}else{
    die("As senha não correspondem!".mysqli_close());
}

}
if(!$resultadoInsert) {
    die("Não foi possivel enviar");
}
else{
    $selectTblUsuario= "SELECT id_usuario FROM tbl_usuario WHERE cpf = '$cpf' and rg = '$rg'";

$resultadoSelect=mysqli_query($strcon, $selectTblUsuario) or die ("Erro no retorno de dados");

$registro = mysqli_fetch_array($resultadoSelect);

$idUsuario = $registro[0];

$insertLogin = "INSERT INTO tbl_login_usuario(id_usuario, email_usuario, senha_usuario) 
VALUES('$idUsuario', '$email', '$senha' )";

$resultadoInsert=mysqli_query($strcon, $insertLogin) or die ("Erro no retorno de dados");

$insertEndereco = "INSERT INTO tbl_endereco_usuario(id_usuario, cep, estado, cidade, rua, numero)  
VALUES('$idUsuario', '$cep', '$estado', '$cidade', '$rua', '$numero' )";

$resultadoInsert2=mysqli_query($strcon, $insertEndereco) or die ("Erro no retorno de dados");

$insertTelefone = "INSERT INTO tbl_contato_usuario(id_usuario, telefone_usuario, id_tipo_telefone)  
VALUES('$idUsuario','$telefone', 1)";

$resultadoInsert3=mysqli_query($strcon, $insertTelefone) or die ("Erro no retorno de dados");


}











?>