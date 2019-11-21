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
        <h2> Cadastre o Usuario:</h2>
        <div class="areaform">
            <form method="post" action="cadastro-user-ok.php"> 
                <label for="nome"><h3>Nome:</h3></label>
                <input type="text" id="nome" name="nome" placeholder="Insira seu nome">

                <label for="email"><h3>E-mail:</h3></label>
                <input type="text" id="email" name="email" placeholder="Insira seu e-mail">

                <label for="Telefone"><h3>Telefone:</h3></label>
                <input type="text" id="telefone" name="telefone" placeholder="Insira seu número de telefone ou celular">

				<label for="endereco"><h3>endereço:</h3></label>
                <input type="text" id="endereco" name="endereco" placeholder="Insira seu endereço">
				
				<label for="login"><h3>login:</h3></label>
                <input type="text" id="login" name="login" placeholder="Insira seu login">

                <label for="Senha"><h3>Senha:</h3></label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha">

                <label for="Senha"><h3>Confirme sua senha:</h3></label>
                <input type="password" id="senha" name="senha2" placeholder="Confirme sua senha">
				
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
	height:75%;
	text-align:center;
	margin-left:25%;
}
</style>