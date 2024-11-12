<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo usuario</title>
</head>
<body>
    <h1>Novo Usuario</h1>
    <form action="?page=salvar" method="post">
        <input type="hidden" name="acao" value="cadastrar">
  <div class="mb-3"></div>
  <label>Nome</label>
  <input type="text" name="nome" class="form-control">

  <div class="mb-3"></div>
  <label>EMAIL</label>
  <input type="email" name="email" class="form-control">

  <div class="mb-3"></div>
  <label>Senha</label>
  <input type="password" name="senha" class="form-control">

  <div class="mb-3"></div>
  <label>Data de nascimento</label>
  <input type="date" name="data_nasc" class="form-control">

  <div class="mb-3"></div>
  <button type="submit" class="btn btn-primary">Enviar</button>









    
    </form>
</body>
</html>