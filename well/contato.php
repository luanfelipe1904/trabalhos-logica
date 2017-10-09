<?php
include("cabecalho.php");

print_r($_GET);

	$codigo = $_GET['codigo'];

	 $dados = file("agenda.csv");

	 foreach ($dados as $linha) {
	 	$colunas = explode(";", $linha);
	 	if ($colunas[0] == $codigo) {
	 		$nome = $colunas[1];
	 		$fone = $colunas[2];
	 		$email = $colunas[3];
	 		if($colunas[4]!= ""){
	 			$foto = $colunas[4];
	 		}else{
	 			$foto = "imagens/semfoto.png";
	 		}	
	 }
}
?>

<section>
	<img src="<?=$foto ?>">
	<h2>Nome: <?=$nome ?></h2>
	<p> Telefone: <?=$fone ?></p>
	<p> Email: <?= $email ?></p>
</section>

<?php
include("rodape.php");
?>
