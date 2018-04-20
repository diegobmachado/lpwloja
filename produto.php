<?php
require_once('inc/conexao.php');
require_once($base_path . 'inc/cabecalho.php');
$id = (int) $_GET['codigo']; //cast

$sql = 'SELECT nome, descricao, preco FROM produtos WHERE id = '.$id;
$produto = pg_query($conexao, $sql);
$produto_array = pg_fetch_array($produto);
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo $base_url; ?>">Home</a></li>
    <li class="breadcrumb-item"><a href="<?php echo $base_url; ?>produtos/">Produtos</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $produto_array['nome']; ?></li>
  </ol>
</nav>
<h1 class="display-4"><?php echo $produto_array['nome']; ?></h1>
<div class="container">
	<div class="row">
		<div class="col-sm">
			<img class="float-left" src="img/sem_imagem.svg" alt="sem imagem">
		</div>
		<div class="col-sm">
			<p class="lead"><?php echo $produto_array['descricao']; ?></p>
			<hr class="my-4">
			<p class="text-right">R$ <?php echo str_replace('.', ',', $produto_array['preco']); ?></p>
			<a class="btn btn-success" href="#" role="button">Adicionar ao carrinho</a>
		</div>
	</div>
</div>
<?php
echo '<a class="btn btn-info" href="index.php">Voltar</a>';
require_once($base_path . 'inc/rodape.php');