<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cadastro</title>

	<!--Importações do jQuery-->
	<script type="text/javascript" src="./js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="./js/mask-plugin.js" ></script>

	<!--Importações do bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!--Importações internas-->
	<link rel="icon" href="imagens/icone.png">

	<script type="text/javascript" src="./js/formCad.js"></script>
</head>

<body>
	<div class="container-fluid">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title text-center">Cadastro de usuário</h3>
				</div>

				<div class="panel-body">
					<form action="" class="form-horizontal">
						<div class="form-group">
							<label for="nome" class="col-md-2 control-label">Nome: </label>
							<div class="col-md-4">
								<input name="nome" type="text" class="form-control nome" placeholder="Nome">

							</div>

							<label for="sobrenome" class="col-md-2 control-label">Sobrenome: </label>
							<div class="col-md-4">
								<input name="sobrenome" type="text" class="form-control sobrenome" placeholder="Sobrenome">
							</div>
						</div>

						<div class="form-group">
							<label for="dataNascimento" class="col-md-4 control-label">Data de Nascimento: </label>
							<div class="col-md-3">
								<input name="dataNascimento" type="text" class="form-control dataNascimento" placeholder="DD/MM/AAAA">

							</div>

							<label for="cep" class="col-md-1 control-label">CEP: </label>
							<div class="col-md-4">
								<input name="cep" type="text" class="form-control cep" placeholder="CEP">
							</div>
						</div>

						<div class="form-group">
							<label for="logradouro" class="col-md-2 control-label">Logradouro: </label>
							<div class="col-md-4">
								<input name="logradouro" type="text" class="form-control rua" placeholder="Logradouro">

							</div>

							<label for="bairro" class="col-md-2 control-label ">Bairro: </label>
							<div class="col-md-4">
								<input name="bairro" type="text" class="form-control bairro" placeholder="Bairro">
							</div>
						</div>

						<div class="form-group">
							<label for="cidade" class="col-md-2 control-label">Cidade: </label>
							<div class="col-md-4">
								<input name="cidade" type="text" class="form-control cidade" placeholder="Cidade">

							</div>

							<label for="estado" class="col-md-2 control-label">Estado: </label>
							<div class="col-md-4">
								<input name="estado" type="text" class="form-control uf" placeholder="Estado">
							</div>
						</div>

						<div class="form-group">
							<label for="numero" class="col-md-2 control-label">Número: </label>
							<div class="col-md-4">
								<input name="numero" type="text" class="form-control" placeholder="Número">

							</div>

							<label for="complemento" class="col-md-2 control-label">Complemento: </label>
							<div class="col-md-4">
								<input name="complemento" type="text" class="form-control" placeholder="Complemento">
							</div>
						</div>

						<div class="form-group">
							<label for="telefone" class="col-md-2 control-label">Telefone: </label>
							<div class="col-md-4">
								<input name="telefone" type="text" class="form-control telefone" placeholder="Telefone">

							</div>

							<label for="celular" class="col-md-2 control-label">Celular: </label>
							<div class="col-md-4">
								<input name="celular" type="text" class="form-control celular" placeholder="Celular">
							</div>
						</div>

						<div class="form-group" id="email">
							<label for="email" class="col-md-2 control-label">E-mail: </label>

							<div class="col-md-10">
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1">@</span>
									<input name="email" type="text" class="form-control email" placeholder="E-mail">
								</div>
							</div>
						</div>


						<div class="form-group" id="email2">
							<label for="emailC" class="col-md-2 control-label">Confirmação: </label>

							<div class="col-md-10">
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1">@</span>
									<input name="emailC" type="text" class="form-control emailC" placeholder="Confirmação de e-mail">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="unidade" class="col-md-2 control-label">Unidade: </label>
							<div class="col-md-3">
								<input name="unidade" type="text" class="form-control" placeholder="Unidade">
							</div>

							<label for="usuario" class="col-md-2 control-label">Usuário: </label>

							<div class="col-md-5">
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
									<input name="usuario" type="text" class="form-control usuario" placeholder="Usuário" disabled>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="senha" class="col-md-1 control-label">Senha: </label>

							<div class="col-md-4">
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
									<input name="senha" type="password" class="form-control senha" placeholder="Senha" maxlength="16">
								</div>
							</div>

							<label for="usuario" class="col-md-2 control-label">Confirmação: </label>

							<div class="col-md-5">
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
									<input name="senhaC" type="password" class="form-control senhaC" placeholder="Confirmação da senha" maxlength="16">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>