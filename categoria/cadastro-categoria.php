<html>
    <head>
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
	</head>
    
<body> 

    <section class="conteiner">
        <h2> Cadastre a Categoria:</h2>
        <div class="areaform">
            <form method="post" action="cadastro-categoria-ok.php"> 
                <label for="action"><h3>Action:</h3></label>
                <input type="text" id="action" name="action" placeholder="Insira a action figure">
				
				<p>

                <label for="livros"><h3>Livros:</h3></label>
                <input type="text" id="livros" name="livros" placeholder="Insira o livro">

				<p>

                <label for="acessorios"><h3>Acessorios:</h3></label>
                <input type="textarea" id="acessorios" name="acessorios" placeholder="Insira o acessorio">

				<p>

				<label for="roupas"><h3>Roupas:</h3></label>
                <input type="text" id="roupas" name="roupas" placeholder="Insira a roupa">

				<p>

             <button class="button" type="submit"> Confirmar</button>
            </form>
        </div>
     </section>
 
    <footer>  </footer>
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
	width:50%;
	height:60%;
	text-align:center;
	margin-left:25%;
}

</style>