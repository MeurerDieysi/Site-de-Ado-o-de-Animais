<?php include('server.php') ?>
<!DOCTYPE html>

<html>

<head>
    
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
          <body background="fofo.png">
</head>
<body>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Não é cadastrado? <a href="register.php">Fazer cadastro</a>
		</p>
                <p>
                        VOLTAR AO SITE <a href="principal.php">IR PARA O SITE</a>
		</p>
                <script>
 id_aplicativo = '1818280898468506'; // COLOQUE O ID DO APLICATIVO AQUI!!!!!!!
 urlAtual = window.location.href;

function statusChangeCallback(response) {
 if (response.status === 'connected') {
 testAPI();
 } else {
 document.getElementById('status').innerHTML =
 '<a href="https://www.facebook.com/dialog/oauth?client_id=' + id_aplicativo + '&redirect_uri=' + urlAtual + '">Entrar com Facebook</a> ' +
 'Faça o login usando sua conta do Facebook';
 }
 }

function checkLoginState() {
 FB.getLoginStatus(function(response) {
 statusChangeCallback(response);
 });
 }

window.fbAsyncInit = function() {
 FB.init({
 appId: id_aplicativo,
 cookie: true,
 xfbml: true,
 version: 'v2.8'
 });
 FB.getLoginStatus(function(response) {
 statusChangeCallback(response);
 });

};



(function(d, s, id) {
 var js, fjs = d.getElementsByTagName(s)[0];
 if (d.getElementById(id)) return;
 js = d.createElement(s);
 js.id = id;
 js.src = "//connect.facebook.net/en_US/sdk.js";
 fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));

function testAPI() {
 /* Coloque os campos que deseja capturar no /me?fields
 para ver quais são os campos, acesse:
 
 https://developers.facebook.com/docs/facebook-login/permissions/ */

FB.api('/me?fields=id,name,email,picture,cover', function(response) {
 document.getElementById('status').innerHTML =
 '<br/>ID: ' + response.id +
 '<br/>Nome: ' + response.name +
 '<br/>e-mail: ' + response.email +
 '<br/>foto: https://graph.facebook.com/' + response.id + '/picture' +
 '<br/><img src="https://graph.facebook.com/' + response.id + '/picture">';
 });
 }

</script>

<div id="status">
</div>

	</form>
    


</body>
</html>