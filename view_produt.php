<?php
include_once 'adm/classes/autoload.php';

$id = new Produto;
$id->setId($_GET['id']);

$produtoDao = new ProdutoDao();
$lista = $produtoDao->selectById($id);

var_dump($lista);

?>
<header style="height:100px"></header>
<section class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto" >
                <h1 class="text-center cor">

                    <?php echo $lista->getNome() ?></h1>
                
					<?php echo $lista->getCategoria() ?>
				 
					<?php echo $lista->getDescricao() ?>
					
					<?php echo $lista->getUnidades() ?>
					
					
                    <img src="<?php echo $lista->getLinks(); ?>">
                        
                    <?php echo $lista->getPreco() ?>
                        
                        <center><a href="<?php echo $this->url ?>News">Voltar</a></center>
                        
                        </div>
                        
        </div>
        
    </div
    
</section>
