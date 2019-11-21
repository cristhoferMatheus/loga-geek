<?php 
include_once 'adm/classes/autoload.php';

$produtoDao = new ProdutoDao();
$lista = $produtoDao->select();
?>

<section class="" >
    <div class="container">
        <div class="">
            <div class="" >
                <center> <h1 >News</h1> </center>
                <br>
                <ul>

                    <?php foreach ($lista as $produtos): ?>
                        <lu>
                            
                            <a href="<?php echo $this->url ?>//<?php echo $produtos->getId() ?>">
                                <?php echo $produtos->getNome() ?><br>
                            </a>
                        </lu>
                        <br>
                    <?php endforeach; ?>
   
                </ul>
            </div>
        </div>
    </div>
</section>
