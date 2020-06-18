<!DOCTYPE HTML>
<html>

<head>
	<title></title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Elite login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-Tags -->
	<!-- Stylesheets -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!--// Stylesheets -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
	<!--//fonts-->
</head>

<body>
	<h1>註冊管理員</h1> </h1>
	<div class="w3ls-login">
		<!-- form starts here -->
		<form action="admin_Add" method="post">
			@csrf
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-user" aria-hidden="true"></i>姓名 name :</label>
				<input type="text" name="name" placeholder=" " required minlength="3" maxlength="10" />
			</div>
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-user" aria-hidden="true"></i>帳號 Username :</label>
				<input type="text" name="username" placeholder=" " required  minlength="3" />
			</div>
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-lock" aria-hidden="true"></i>密碼 Password :</label>
				<input type="password" name="password" placeholder=" " required minlength="5" maxlength="12"  />
			</div>
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-email" aria-hidden="true"></i>信箱 E-mail :</label>
				<input type="email" name="email" placeholder=" " required />
			</div>
			<!-- //script for show password -->
			<div class="w3ls-login  w3l-sub">
			<input type="hidden" name="date" value="{{date('Y-m-d')}}">
			<input type="hidden" name="registered" value="registered">
				<input type="submit" value="註冊">
				<input type="button" value="返回">
			</div>
		</form>
	</div>
	<!-- //form ends here -->
	<!--copyright-->
	<div class="copy-wthree">
		<p>© 2018 Elite login Form . All Rights Reserved | Design by
		</p>
	</div>
	<!--//copyright-->
</body>

</html>