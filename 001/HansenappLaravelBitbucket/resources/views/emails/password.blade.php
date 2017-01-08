<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('painel/css/especializati.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('painel/assets/css/especializati-responsivo.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('painel/assets/css/style.css')}}">
</head>
<body>
	<h2><b>Hansen</b>App</h2>
	<p>Estamos enviando o link para recuperação de seu acesso ao <b>Painel do Sistema Escolar.</b></p>
	<p>Caso nao tenha pedido essa solilitação, ignore esse e-mail.</p>
	<h3>Clique no link abaixo para recuperar sua senha: <br> {{ url('/resetar-senha/'.$token) }}</h3>
</body>
</html>
