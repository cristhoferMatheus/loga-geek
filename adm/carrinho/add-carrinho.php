<html>
    <head></head>
    
<body> 

    <section id="contato">
        <h2> Cadastre-se:</h2>
        <div class="areaform">
            <form method="post" action="cadastro-produto-ok.php"> 
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Insira seu nome">o">

				<label for="unidades">Unidades:</label>
                <input type="number" id="unidades" name="unidades" placeholder="Insira o numero de produtos">

                <label for="imagem">Imagem:</label>
                <input type="files" id="img" name="img" placeholder="escolha a imagem">
				
				<label for="preco">Preço:</label>
                <input type="text" id="preco" name="preco" placeholder="insira o preço do produto">

             <button class="button" type="submit"> Confirmar</button>
            </form>
        </div>
     </section>
 
    <footer>  </footer>
</body>
</html>