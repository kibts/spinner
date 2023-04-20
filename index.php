<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Квиз</title>
	<style type="text/css">
		body {
			background-color: #FDD4CE;
			text-align: center;
		}
		h1 {
			margin-top: 50px;
			font-size: 48px;
			color: black;
		}
		.spinner {
			display: inline-block;
			width: 50px;
			height: 50px;
			border: 3px solid rgba(0, 0, 0, 0.3);
			border-radius: 50%;
			border-top-color: #FF6B6B;
			animation: spin 1s ease-in-out infinite;
			margin-top: 50px;
		}
		@keyframes spin {
			to {transform: rotate(360deg);}
		}
		p {
			font-size: 24px;
			color: black;
			margin-top: 20px;
		}
		button {
			background-color: black;
			color: white;
			font-size: 24px;
			padding: 20px 40px;
			border-radius: 5px;
			margin-top: 20px;
			cursor: pointer;
		}
		@media (max-width: 768px) {
			h1 {
				font-size: 36px;
			}
			p {
				font-size: 18px;
			}
			button {
				font-size: 18px;
				padding: 10px 20px;
			}
		}
	</style>
</head>
<body>
	<h1>Квиз</h1>
	<div class="spinner"></div>
	<p>Пожалуйста, подождите...</p>
	<p>Пройдите наш квиз и выиграйте приз!</p>
	<button id="redirectButton" style="display: none;">Перейти</button>

	<script type="text/javascript">
		setTimeout(function() {
			document.querySelector('.spinner').style.display = 'none';
			document.querySelector('p:first-of-type').style.display = 'none';
			document.querySelector('p:last-of-type').innerHTML = 'Поздравляем! Ваши ответы приняты, вы можете принять участие в розыгрыше призов.';
			document.querySelector('#redirectButton').style.display = 'block';
		}, 4000);
	</script>
</body>
</html>
