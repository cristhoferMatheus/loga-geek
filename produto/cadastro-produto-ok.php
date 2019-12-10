<?php
include_once '../classes/autoload.php';

//Verifica se veio tudo preenchido do formulário

if (isset($_POST['nome']) && $_POST['nome'] != "" 
        && isset($_POST['categoria']) && $_POST['categoria'] != ""
        && isset($_POST['descricao']) && $_POST['descricao'] != ""
		&& isset($_POST['unidades']) && $_POST['unidades'] != ""
        && isset($_POST['preco']) && $_POST['preco'] != "") {
			
			
			
        if ($_POST) {
            echo "<pre>";
            var_dump($_FILES);
            echo "</pre>";
            //VALIDANDO O TIPO DA IMAGEM
            $types = ['image/jpeg', 'image/png', 'image/gif'];
            $type_image = false;

            foreach ($types as $type){
                $type_image = ($type == $_FILES['arquivo']['type']) ? true : false;
                if($type_image){
                    break;
                }
            }

            if ($type_image) {
                $tempname = $_FILES['arquivo']['tmp_name'];
                $folder = "../../img/novos/";
                $name = $_FILES['arquivo']['name'];
                //LÓGICA PARA NÃO SOBRESCREVER ARQUIVOS            

                $destino = $folder . $name;
                if (move_uploaded_file($tempname, $destino)) {
                    echo "<img src='$destino' width='200' height='200'>";

                    //PODE SALVAR NO BANCO O NOME DA IMAGEM $new_name
                } else {
                    echo "erro ao mover arquivo";
                }
            } else {
                echo "Tipo de arquivo não suportado.";
            }
        }
       		
			

    $produto = new Produto();
    $produto->setNome($_POST['nome']);
    $produto->setCategoria($_POST['categoria']);
    $produto->setDescricao($_POST['descricao']);
    $produto->setUnidades($_POST['unidades']);
	$produto->setPreco($_POST['preco']); 
	$produto->setImg($name); 

    $produtoDao = new ProdutoDao();
    $b = $produtoDao->insert($produto);
	
	var_dump($produto);
}
?>

<html>
<body> 

    <section class="conteiner">
		<img src="sucesso.png">
        <h2> Sucesso ao cadastrar!</h2>
		<button><a href="listar-produtos.php">Voltar</a></button>
     </section>
    
    <footer> 
    </footer>
</body>
</html>

<style>
.conteiner{
	background-color:#c5a0a0;
	width:50%;
	height:60%;
	text-align:center;
	margin-left:25%;
}

img{
	width:300px;
	height:300px;
}

a{
	text-decoration:none;
}

button{
width:60px;
height:25px;
}
</style>