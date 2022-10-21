<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- js -->
    <script src="assets/js/script.js"></script>
    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 mt-3">
        <h1>Login no sistema</h1>
        
			<form action="?controller=user&action=validateLogin" method=POST name="formulario" id="formulario">
				<div class="form-group m-4">
					<label >Login</label>
					<input type="text" class="form-control" name="userName" placeholder="Digite o usuário">				
				</div>
				<div class="form-group m-4">
		 			<label >Senha</label>
					<input type="password" class="form-control" name="password" placeholder="Digite sua senha">
				</div>	
				<input class="btn btn-primary m-4" type="submit" name="Enviar" value="Fazer Login">
			</form>
            

        </div>
        <div class="col-md-4"></div>
    </div>
</body>

