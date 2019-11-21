<?php
include_once '../classes/autoload.php';

//Verifica se veio tudo preenchido do formulário
if (isset($_GET['id']) && $_GET['id'] != "") {

    $produto = new Produto();
    $produto->setId($_GET['id']);

    $produtoDao = new ProdutoDao();
    $produtoData = $produtoDao->selectById($produto);
    
}
?>
		<ul>
		  <li><a href="../index.html">Home</a></li>

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
<html>
<body> 

    <section class="conteiner">
        <h2> Re-Cadastre o Produto:</h2>
        <div class="areaform">
            <form method="post" action="produto-edita-ok.php">
            <input type="hidden" name="id" value="<?php echo $produtoData->getId(); ?>" >
                <label for="nome"><h3>Nome</h3></label>
                <input type="text" id="nome" name="nome" placeholder="Insira seu nome">

                <label for="categoria"><h3>Categoria:</h3></label>
                <input type="text" id="categoria" name="categoria" placeholder="Insira a categoria do produto">

                <label for="descricao"><h3>Descrição:</h3></label>
                <input type="textarea" id="descricao" name="descricao" placeholder="Insira a descrição do produto">

				<label for="unidades"><h3>Unidades:</h3></label>
                <input type="number" id="unidades" name="unidades" placeholder="Insira a quantidade de produtos">

                <label for="img"><h3>Imagem:</h3></label>
                <input type="files" id="img" name="img" placeholder="selecione a imagem">
				
				<label for="preco"><h3>Preço:</h3></label>
                <input type="text" id="preco" name="preco" placeholder="insira o preço do produto">
				
				<p>

             <button class="button" type="submit"> Confirmar</button>
            </form>
        </div>
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
	height:100%;
	text-align:center;
}
</style>