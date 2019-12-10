<?php
include_once 'adm/classes/autoload.php';

    $produto = new Produto();
    $produto->setId($_GET['id']);

    $produtoDao = new ProdutoDao();
    $lista = $produtoDao->selectById($produto);

?>
<header style="height:50px"></header>
<section>
    <div >
        <div>
            <div >
                <h1>Nome: <?php echo $lista->getNome() ?></h1>
                
					<p>Categoria: <?php echo $lista->getCategoria() ?><p>
				 
					<p>Descrição: <?php echo $lista->getDescricao() ?><p>
					
					<p>Unidades: <?php echo $lista->getUnidades() ?><p>
					
					
                    <img src="img/novos/<?php echo $lista->getImg(); ?>"><p>
                        
                    <p>Preço: R$<?php echo $lista->getPreco() ?><p>
                        
                        <button><a href="index.php">Voltar</a></button>
                        
                        </div>
                        
        </div>
        
    </div
    
</section>
