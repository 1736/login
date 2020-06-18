<!DOCTYPE HTML>
<html>

<head>
	<title>登入</title>
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
	<h1>管理者登入</h1> </h1>
	<div class="w3ls-login">
		<!-- form starts here -->
		<form action="index" method="post">
			@csrf
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-user" aria-hidden="true"></i>帳號 Username</label>
				<input type="text" name="username" placeholder=" " required />
			</div>
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-lock" aria-hidden="true"></i>密碼 Password</label>
				<a href="find_pw" class="w3ls-right">忘記密碼?</a>
				<input type="password" name="password" placeholder=" " required id="myInput" />
				<div class="agile_label">
					<input id="check3" name="check3" type="checkbox" value="show password" onclick="myFunction()">
					<label class="check" for="check3">顯示密碼</label>
				</div>
			</div>
			<script>
				function myFunction() {
					var x = document.getElementById("myInput");
					if (x.type === "password") {
						x.type = "text";
					} else {
						x.type = "password";
					}
				}
			</script>
			<!-- //script for show password -->
			<div class="w3ls-login  w3l-sub">
				<input type="submit" value="登入">
			</div><br>
			<div><a href="registered">註冊管理員</a></div>
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