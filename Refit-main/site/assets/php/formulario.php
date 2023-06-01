<?php
include_once('conexao.php');

//Salvar os dados no banco de dados
$nome = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$sql = "INSERT INTO cliente (nome, email,phone) VALUES ('$nome', '$email','$phone')";

    if(isset($_POST['enviar-formulario-1'])) {
        header('Location: https://pay.kiwify.com.br/F7Dvv7c');
    } 
    else {
    echo "Erro ao salvar os dados: " . mysqli_error($conn);
}

?>
