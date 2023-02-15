

<head>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="main/main.css"> 
<script src="validate.js"></script> 
	<title>Авторизация и регистрация</title>
</head>
<body>
	<form method="post" id="Login">
		
		<label>Login</label>
		
			<input type="text" placeholder="Введите свой логин" name ="login">
		
		<label>Password</label>
			
			<input type="password" placeholder="Введите пароль" name="password">
		
		<button name="log_in">Войти</button>
			<p>Если нет аккаунта!</p><a href="/register.php">Зарегистрируйтесь</a>
	</form>
</body>
