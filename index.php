<!DOCTYPE html>
<html>
<head>
	<title>Квиз</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {
			background-color: transparent;
			background-image: url('/img/fon.jpg');
			background-size: cover;
			background-position: center center;
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
			color: #000000;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			font-size: 1.5em;
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
			font-size: 1.5em;
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
		document.querySelector("p").style.display = "none"; // добавлено
                document.querySelector("h1").style.display = "none";
	}
	setTimeout(showResult, 4000);
</script>
</head>
<body>
	<h1>Пройдите наш квиз и выиграйте приз!</h1>
	<div class="spinner"></div>
	<p>Пожалуйста, подождите...</p>
	<p class="message"></p>
	<button onclick="location.href='https://example.com'">Перейти</button>
</body>
</html>
