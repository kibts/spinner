<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Квиз</title>
	<style type="text/css">
		body {
			background-color: #FDD4CE;
			text-align: center;
		}
		.spinner {
			border: 16px solid #f3f3f3;
			border-top: 16px solid #333;
			border-radius: 50%;
			width: 120px;
			height: 120px;
			animation: spin 4s linear infinite;
			margin: auto;
			margin-top: 20px;
		}
		@keyframes spin {
			0% { transform: rotate(0deg); }
			100% { transform: rotate(360deg); }
		}
		.button {
			background-color: #000000;
			color: #ffffff;
			border: none;
			padding: 16px 32px;
			text-align: center;
			font-size: 16px;
			margin: 20px auto;
			display: block;
			cursor: pointer;
			border-radius: 5px;
			text-decoration: none;
		}
	</style>
</head>
<body>
	<div class="spinner"></div>
	<p>Пожалуйста, подождите...</p>
	<p id="result"></p>
	<a href="#" class="button" id="redirect-button" style="display: none;">Перейти</a>
	<script type="text/javascript">
		setTimeout(function() {
			document.querySelector(".spinner").style.display = "none";
			document.querySelector("p").style.display = "none";
			document.querySelector("#result").innerHTML = "Поздравляем! Ваши ответы приняты, вы можете принять участие в розыгрыше призов.";
			document.querySelector("#redirect-button").style.display = "block";
		}, 4000);
	</script>
</body>
</html>
