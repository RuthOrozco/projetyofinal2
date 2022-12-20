<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Cadastro de Cliente</h1>
    <hr>
    <form action="gravar.php" method="post"> 
        Nome:<br/>
        <input type="text" name="nome"placeholder="Digite o nome" required/><br/><br/>
        E-mail:<br/>
        <input type="text" name="email"placeholder="Digite o email" required/><br/><br/>
        Telefone:<br/>
        <input type="text" name="telefone" placeholder="Digite o telefone" required/><br/><br/>
        foto:<br/>
        <input type="file" name="foto" required="required"><br/><br/>
        <input type="submit" value="Cadastrar">
        
</body>
</html>