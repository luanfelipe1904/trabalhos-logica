<?php
	//funcao que abre o arquivo e retorna o seu conteudo como uma string - file_get_contents()
	$cabecalho = file_get_contents("cabecalho.php");
	print($cabecalho);
?>

	<section id="meio">
	<table border="1" background="./chape.png">
	
<?php

	//essa funcao abre um arquivo e traz seu conteudo para um array
	$agenda = file("agenda.csv");

	//percorre o array
	foreach($agenda as $chave=>$linha){
			$colunas = explode(";", $linha);

			if($chave==0){
				//chave==0 é a primeira linha
				print('<tr>
					<th>'.$colunas[1].'</th>
					<th>'.$colunas[2].'</th>
					<th>'.$colunas[3].'</th>
					</tr>');
			}else{
				if(($chave % 2)==0){
				print('<tr class="corPar">
					<td><a href="contato.php?codigo='.$colunas[0].'">'.$colunas[1].'</td>
					<td>'.$colunas[2].'</td>
					<td>'.$colunas[3].'</td>
				</tr>');
				}else{
					print('<tr class="corImpar">
						<td><a href="contato.php?codigo='.$colunas[0].'">'.$colunas[1].'</td>
						<td>'.$colunas[2].'</td>
						<td>'.$colunas[3].'</td>
					</tr>');
				

				}

			}
	}
			$quantidade = sizeof($agenda);
			$quantidade = $quantidade - 1;
		print('<tr><td>'.$quantidade." contatos listados.".'</td></tr>')
?>
	</table>


	
		<p>Dados atualizados em dd/mm/aa</p>
	</section>


<?php
	$rodape = file_get_contents("rodape.php");
	print($rodape);
?>