<?php 
require 'config/config.php';

if(!empty($_POST)):

	define("PASTA_ARQUIVOS", 'arquivos/');

	$nome_arquivo       = filter_var($_POST['nome'], FILTER_SANITIZE_MAGIC_QUOTES);
	$arquivo            = $_FILES['arquivo']['name'];
	$arquivo_temporario = $_FILES['arquivo']['tmp_name'];

	$ext               = explode('.', $arquivo);
	$extensao          = end($ext);
	$novo_nome_arquivo = uniqid().'.'.$extensao;

	$data_vencimento = date("Y-m-d H:i:s", time() +60); 

	if(move_uploaded_file($arquivo_temporario, PASTA_ARQUIVOS.$novo_nome_arquivo)):
		$dados_arquivo_cadastrar = array(1=>$nome_arquivo, 2=>PASTA_ARQUIVOS.$novo_nome_arquivo, 3=>$data_vencimento);
		if($cadastrar_arquivo = cadastrar($dados_arquivo_cadastrar)): 
			$mensagem = "Cadastrou"; 
		endif;
	endif;

endif;

if (isset($_GET['download']) == 'true') {
	/*PEGAR DADOS DO ARQUIVO PELO ID*/
	$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
	$dados_arquivo_cadastrado = pegar_pelo_id($id);
	$validade_arquivo =  date("d/m/Y H:i:s", strtotime($dados_arquivo_cadastrado->arquivo_data));
	$data_atual = date("d/m/Y H:i:s");

	if($data_atual > $validade_arquivo){
		$mensagem = "Arquivo não está mais disponivel para download";
	}else{
		header("Pragma: public", true);
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Expires: 0");
		header("Content-Description: Baixar Arquivo");
		header("Content-Type: application/force-download");
		header("Content-Type: application/octet-stream");
		header("Content-Type: application/download");
		header("Content-Disposition: attachment; filename=".basename($dados_arquivo_cadastrado->arquivo_caminho));
		header("Content-Transfer-Encoding: binary");
		header('Content-Length: '.filesize($dados_arquivo_cadastrado->arquivo_caminho));
		readfile($dados_arquivo_cadastrado->arquivo_caminho);
	}
}

?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Limite de tempo em download</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="container">
		<form action="" method="post" enctype="multipart/form-data">

			<label for="">Nome</label>
			<input type="text" name="nome" />

			<label for="">Arquivo</label>
			<input type="file" name="arquivo" />
			
			<label for=""></label>
			<input type="submit" name="cadastrar" value="OK" class="btn btn-primary" />
		</form>

		<?php echo isset($mensagem) ? '<div class="alert alert-success">'.$mensagem.'</div>' : "Erro ao cadastrar" ?>

		<hr />

		<table class="table table_striped">
			<thead>
				<tr>
					<th>Arquivo</th>
					<th>Data Validade</th>
					<th>Download</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$dados_arquivo = listar();
				if(!empty($dados_arquivo)){
					$listar_dados_arquivo = new arrayIterator($dados_arquivo);
					while ($listar_dados_arquivo->valid()) {
				?>
				<tr>
					<td><?php echo $listar_dados_arquivo->current()->arquivo_nome; ?></td>
					<td><?php echo date("d/m/Y H:i:s", strtotime($listar_dados_arquivo->current()->arquivo_data)); ?></td>
					<td><a href="?id=<?php echo $listar_dados_arquivo->current()->id; ?>&download=true"><i class="icon-download-alt"></i></a></td>
				</tr>
				<?php
						$listar_dados_arquivo->next();
					}
				}else{
				?>
				<td colspan="2">NENHUM arquivo cadastrado</td>
				<?php 
				}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>	