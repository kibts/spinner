<!DOCTYPE html>
<html>
<head>
	<title>Квиз</title>
	<style>
		body {
			background-color: #FDD4CE;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 100vh;
			margin: 0;
			font-family: Arial, sans-serif;
		}
		h1 {
			color: #000000;
			text-align: center;
			font-size: 2em;
			margin-bottom: 1em;
		}
		.spinner {
			animation: spin 4s infinite linear;
			border: 10px solid #000000;
			border-top: 10px solid #FFFFFF;
			border-radius: 50%;
			width: 80px;
			height: 80px;
			margin-bottom: 1em;
		}
		@keyframes spin {
			0% { transform: rotate(0deg); }
			100% { transform: rotate(360deg); }
		}
		.message {
			color: #FFFFFF;
			background-color: #000000;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			font-size: 1.2em;
			margin-bottom: 1em;
			text-align: center;
			display: none;
		}
		button {
			background-color: #000000;
			color: #FFFFFF;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			font-size: 1.2em;
			cursor: pointer;
			display: none;
		}
	</style>
	<script>
		function showResult() {
			document.querySelector(".spinner").style.display = "none";
			document.querySelector(".message").style.display = "block";
			document.querySelector(".message").textContent = "Поздравляем! Ваши ответы приняты, вы можете принять участие в розыгрыше призов";
			document.querySelector("button").style.display = "block";
		}
		setTimeout(showResult, 4000);
	</script>
</head>
<body>
	<div class="spinner"></div>
	<p class="message"></p>
	<button onclick="location.href='https://example.com'">Перейти</button>
</body>
</html>
