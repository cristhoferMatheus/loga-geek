<html>
    <head> 	
		<ul>
		  <li><a href="#home">Home</a></li>

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
        <h2> Cadastro da Encomendas:</h2>
        <div class="areaform">
            <form method="post" action="cadastro-encomenda-ok.php"> 
                <label for="nPed"><h3>Numero de Pedido:</h3></label>
                <input type="text" id="nPed" name="nPed" placeholder="Insira o numero de pedidos">

                <label for="nomeS"><h3>Nome do Solicitante:</h3></label>
                <input type="text" id="nomeS" name="nomeS" placeholder="Insira o nome do solicitante">

                <label for="estado"><h3>Estado:</h3></label>
                <input type="text" id="estado" name="estado" placeholder="Insira o estado do solicitante">

				<label for="cidade"><h3>Cidade:</h3></label>
                <input type="text" id="cidade" name="cidade" placeholder="Insira a cidade do pedinte">

                <label for="endereco"><h3>Endereço:</h3></label>
                <input type="text" id="endereco" name="endereco" placeholder="insira o endereço do pedinte">
				
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
	height:65%;
	text-align:center;
	margin-left:25%;
}
</style>