<?php 
include_once '../classes/autoload.php';

$produtoDao = new ProdutoDao();
$lista = $produtoDao->select();
?>

<html>
 		<ul>
		  <li><a href="../index.html">Index Adm</a></li>

		  <li class="dropdown">
			<a href="../encomenda/listar-encomendas.php" class="dropbtn">Encomendas</a>
			<div class="dropdown-content">
			  <a href="cadastro-encomenda.php">cadastrar</a>
			  <a href="listar-encomendas.php">listar</a>
			</div>
		  </li>
		  <li class="dropdown">
			<a href="../produto/listar-produtos.php" class="dropbtn">Produto</a>
			<div class="dropdown-content">
			  <a href="cadastro-produto.php">cadastrar</a>
			  <a href="listar-produtos.php">listar</a>
			</div>
		  </li>
		  <li class="dropdown">
			<a href="../categoria/listar-categoria.php" class="dropbtn">Categorias</a>
			<div class="dropdown-content">
			  <a href="cadastro-categoria.php">cadastrar</a>
			  <a href="listar-categoria.php">listar</a>
			</div>
		  </li>
		  <li class="dropdown">
			<a href="../cliente/listar-cliente.php" class="dropbtn">Clientes</a>
			<div class="dropdown-content">
			  <a href="listar-cliente.php">listar</a>
			</div>
		  </li>
		  <li class="dropdown">
			<a href="../usuario/listar-users.php" class="dropbtn">Usuarios</a>
			<div class="dropdown-content">
			  <a href="cadastro-user.php">cadastrar</a>
			  <a href="listar-users.php">listar</a>
			</div>
		  </li>
		</ul>
		
    <body>

    <section class="conteiner">

            <table>
			<thead>
			<tr>
			<th>id</th>
			<th>nome</th>
			<th>categoria</th>
			<th>descrição</th>
			<th>unidades</th>
			<th>img</th>
			<th>Preço</th>
			</tr>
			</thead>
			<tbody>
                    <?php foreach($lista as $produtos): ?>
                 <tr>
							<td> <?php echo $produtos->getId(); ?></td>
                            <td> <?php echo $produtos->getNome(); ?></td>
                            <td> <?php echo $produtos->getCategoria(); ?></td>
                            <td> <?php echo $produtos->getDescricao(); ?></td>
                            <td> <?php echo $produtos->getUnidades(); ?></td>
                            <td> <img width="100" height="100" src="../../img/novos/<?php echo $produtos->getImg(); ?>"></td>
                            <td> <?php echo $produtos->getPreco(); ?></td>
							
                        <td><button onclick="confirm('Deseja exclir este registro?') ? window.location='produto-deleta-ok.php?id=<?php echo $produtos->getId(); ?>' : stop = false;">  excluir </button> </td>
                        <td><button  onclick="window.location='produto-edita.php?id=<?php echo $produtos->getId(); ?>';" class="btn btn-outline btn-primary"> editar </button> </td>

                    <?php endforeach; ?> 
			</tbody>		
			</table>
        </section>

    <footer>
        
    </footer>
    </body>
</html>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #632e2e;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

.conteiner{
	background-color:#c5a0a0;
	margin-top:15px;
}
</style>
                                        