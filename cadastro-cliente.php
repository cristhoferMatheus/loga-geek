<html>    
<body> 

    <section class="conteiner">
        <h2> Cadastro do Cliente:</h2>
        <div class="areaform">
            <form method="post" action="cadastro-cliente-ok.php"> 
                <label for="nome"><h3>Nome:</h3></label>
                <input type="text" id="nome" name="nome" placeholder="Insira seu nome">



                <label for="Snome"><h3>Sobrenome:</h3></label>
                <input type="text" id="Snome" name="Snome" placeholder="Insira o sobrenome">

                <label for="email"><h3>Email:</h3></label>
                <input type="text" id="email" name="email" placeholder="Insira seu email">

				<label for="cpf"><h3>Cpf:</h3></label>
                <input type="number" id="cpf" name="cpf" placeholder="Insira o cpf">

                <label for="cidade"><h3>Cidade:</h3></label>
                <input type="text" id="cidade" name="cidade" placeholder="insira a sua cidade">
				
				<label for="estado"><h3>Estado:</h3></label>
                <input type="text" id="estado" name="estado" placeholder="insira seu estado">
				
				<label for="login"><h3>Login:</h3></label>
                <input type="text" id="login" name="login" placeholder="insira um login">
				
				<label for="senha"><h3>Senha:</h3></label>
                <input type="text" id="senha" name="senha" placeholder="insira uma senha">

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
	height:91%;
	text-align:center;
	margin-left:25%;
}
</style>