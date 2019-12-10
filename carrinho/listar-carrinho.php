<?php 
include_once '../classes/autoload.php';

$carrinhoDao = new CarrinhoDao();
$lista = $carrinhoDao->select();

?>
    <body>

    <section class="conteiner">

            <table>
			<thead>
			<tr>
			<th>id</th>
			<th>nome</th>
			<th>IdCliente</th>
			<th>IdProduto</th>
			<th>Img</th>
			<th>Preco</th>
			<th>Status</th>
			</tr>
			</thead>
			<tbody>
                    <?php foreach($lista as $carrinho): ?>
                 
					<tr>
							<td> <?php echo $carrinho->getId(); ?></td>
                            <td> <?php echo $carrinho->getNome(); ?></td>
                            <td> <?php echo $carrinho->getIdCliente(); ?></td>
                            <td> <?php echo $carrinho->getIdProduto(); ?></td>
                            <td><img height="150px" width="150px" src="../../img/novos/<?php echo $carrinho->getImg(); ?>"></td>
                            <td> R$ <?php echo $carrinho->getPreco(); ?></td>
                            <td> <?php echo $carrinho->getStatus(); ?></td>
                            
                    <?php endforeach; ?> 
			</tbody>		
			</table>
        </section>

    <footer>
        
    </footer>
    </body>
</html>