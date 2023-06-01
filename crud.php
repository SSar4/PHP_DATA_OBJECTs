<?php
    $pdo = new PDO('mysql:host=localhost;dbname=MeuBancoDeDados','root','root');

    //insert
    if(isset($_POST['nome'])){
        $sql = $pdo->prepare("INSERT INTO usuarios  VALUES (null,?,?)");
        $sql->execute(array($_POST['nome'],$_POST['email']));
        echo 'inserted';
    }
?>

<form method="post">
    <input type="text" name="nome">
    <input type="text" name="email">
    <input type="submit" name="enviar">
</form>