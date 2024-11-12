<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>

<body>
    <h1>Editar Usuario</h1>
    <?php 
    $sql = "SELECT * FROM usuarios WHERE id= " . $_REQUEST["id"];  
    $res = $conn->query($sql);
    $row = $res->fetch_object()

    
    
    ?>
    <form action="?page=salvar" method="post">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php print $row->id;?>">
        <div class="mb-3"></div>
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome;  ?>" class="form-control">

        <div class="mb-3"></div>
        <label>EMAIL</label>
        <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control">

        <div class="mb-3"></div>
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" required>

        <div class="mb-3"></div>
        <label>Data de nascimento</label>
        <input type="date" name="data_nasc" value="<?php print $row->data_nasc; ?>"class="form-control">

        <div class="mb-3"></div>
        <button type="submit" class="btn btn-primary">Salvar</button>










    </form>
</body>

</html>