<?php 
include_once '../classes/autoload.php';

$carrinhoDao = new CarrionhoDao();
$lista = $carrinhoDao->select();
?>

<html>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="assets/js/script.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
        <link rel="sortcut icon" href="assets/img/icon.ico" type="image/x-icon"/>
        <meta charset="utf-8">
    <body>

    <section id="content">

            <table>
			<thead>
			<tr>
			<th>id</th>
			<th>nome</th>
			<th>img</th>
			<th>preco</th>
			</tr>
			</thead>
			<tbody>
                    <?php foreach($lista as $car): ?>
                 
					<tr>
							<td> <?php echo $car->getId(); ?></td>
                            <td> <?php echo $car->getNome(); ?></td>
                            <td> <?php echo $car->getImg(); ?></td>
                            <td> <?php echo $car->getPreco(); ?></td>
							
                        <td><button onclick="confirm('Deseja exclir este registro?') ? window.location='carrionho-deleta-ok.php?id=<?php echo $car->getId(); ?>' : stop = false;">  excluir compra</button> </td>

                    <?php endforeach; ?> 
			</tbody>		
</table>
        </section>

    <footer>
        
    </footer>
    </body>
</html>
                                        