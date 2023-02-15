

<head>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="main/main.css"> 

<script src="validate.js"></script> 
	<title>Авторизация и регистрация</title>
</head>
<body>
	<form enctype="multipart/form-data" method="post"  id="register" >
		<label>Login</label>
			
			<input type="text" placeholder="Введите свой логин" name="login2">
		
		<label>Password</label>
			
			<input type="password" placeholder="Введите пароль" name="password2">
		
		<label>Confirm_password </label>
		
			<input type="password" placeholder="Подтвердите пароль" name = "confirm_password">
		
		<label>Email </label>
		
			<input type="email" placeholder="Email"  name ="email">
		
		<label>Name</label>
		
			<input type="text" placeholder="Name" name="name">
		
		<button id="btn_reg" name="button_reg">Зарегистрироваться</button>
		
	</form>
</body>
