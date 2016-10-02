<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home</title>

	<!--Importações do bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!--Importações internas-->
	<link rel="icon" href="imagens/icone.png">
	<link rel="stylesheet" href="./css/index.css">

</head>

<body>

	<div class="container">
		<div class="col-md-4 col-md-offset-4">
			<img src="imagens/icone.png" alt="Icone" class="icon">
		</div>
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title text-center">Sistema de Gerenciamento Escolar</h3>
				</div>

				<div class="panel-body">

					<form class="form-horizontal" action="" method="POST">

						<div class="form-group">
							<label for="usuario" class="col-md-2 control-label">Usuário: </label>

							<div class="col-md-10">
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
									<input name="usuario" type="text" class="form-control" placeholder="Usuário">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="usuario" class="col-md-2 control-label">Senha: </label>

							<div class="col-md-10">
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
									<input name="senha" type="password" class="form-control" placeholder="Senha" maxlength="16">
								</div>
							</div>
							<div class="form-group col-md-12">
								<button type="submit" class="btn btn-form btn-primary btn-first">Entrar</button>
								<a class="btn btn-form btn-primary" role="button">Trocar a senha</a>
								<a class="btn btn-form btn-primary" role="button">Cadastre-se</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>

	<div class="footer-menu">
		<div class="btn-group">
			<a class="btn btn-a" role="button">Termos de uso</a>
			<a class="btn btn-a" role="button">Desenvolvedor</a>
			<a class="btn btn-a" role="button">Contato      </a>
		</div>
	</div>

</body>

</html>