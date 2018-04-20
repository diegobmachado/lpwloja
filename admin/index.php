<?php
require_once('inc/cabecalho.php');
if(isset($_SESSION['nome'])){
	echo 'dashboard';
}else{
	?>
	<center>
		<form action="/login.php" method="post">
			<div class="form-group">
				<label for="email">E-mail</label>
				<input type="email" class="form-control" name="email" id="email">
			</div>
			<div class="form-group">
				<label for="email">Senha</label>
				<input type="password" class="form-control" name="senha" id="senha">
			</div>
			<button type="submit" class="btn btn-primary">Login</button>
		</form>
	</center>
	<?php
}
require_once('inc/rodape.php');