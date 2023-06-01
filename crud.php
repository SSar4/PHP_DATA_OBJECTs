<?php
    $pdo = new PDO('mysql:host=localhost;dbname=MeuBancoDeDados','root','root');

    //insert
    if(isset($_POST['nome'])){
        $sql = $pdo->prepare("INSERT INTO usuarios  VALUES (null,?,?)");
        $sql->execute(array($_POST['nome'],$_POST['email']));
        echo 'inserted';
    }

    // Listagem de usuários
    $consulta = $pdo->query("SELECT * FROM usuarios");
    $usuarios = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Formulário de inserção -->
<form method="post">
    <input type="text" name="nome">
    <input type="text" name="email">
    <input type="submit" name="enviar">
</form>

<!-- Listagem de usuários -->
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $usuario) : ?>
            <tr>
                <td><?php echo $usuario['id']; ?></td>
                <td><?php echo $usuario['nome']; ?></td>
                <td><?php echo $usuario['email']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>