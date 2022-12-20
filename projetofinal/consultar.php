<?php include_once 'cabecalho.php'; ?>
<script>
    function excluir(id) {
        if (confirm('Deseja realmente excluir')) {
            location.href= ' excluir.php?id='+id;

        }
    }
</script>
<h1>Consultar clientes</h1>
<hr>
<?php


// abrir  a conexão com o banco
include_once './conexao.php';
// montar a instrulção sql para buscar a informação
// sql = "select * from clientes where nome like '".$nome."%'"
//mysqli_query()-> executa a instrução do banco
$sql = "select * from clientes";
$result = mysqli_query($con,$sql);
if (mysqli_num_rows($result)>0) {

?>

<table class=" table ">
    <tr>
        <td>Nome</td>
        <td>Email</td>
        <td>Telefone</td>
        <td>Foto</td>
        <td>Editar</td>
        <td>Excluir</td>

    </tr>
<?php
while ($row = mysqli_fetch_array($result)){
    ?>
    <tr>
 <td><?php echo $row["nome"];?></td>
 <td><?php echo $row["email"];?></td>
 <td><?php echo $row["telefone"];?></td>
 <td><?php echo $row["foto"];?></td>
 <td><a href="editar.php?id=<?php echo $row["idusuario"] ?>"><img src="./imges/author.jpg"></a></td>
 <td><a href="excluir.php"onclick="excluir(<? echo $row['idusuario']; ?>)"><img src=".images/excluir.jpg"></a></td>

   </tr> 
   <?php  
}

}
?>
