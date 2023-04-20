<!DOCTYPE html>
<html>
<head>
	<title>Квиз</title>
	<style type="text/css">
		body {
			background-color: #FDD4CE;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}

		.quiz-container {
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		.spinner {
			margin-bottom: 30px;
		}

		.spinner .spinner-container {
			width: 100px;
			height: 100px;
			position: relative;
			border-radius: 50%;
			border: 8px solid #fff;
			box-sizing: border-box;
		}

		.spinner .spinner-container:before,
		.spinner .spinner-container:after {
			content: "";
			position: absolute;
			top: 50%;
			left: 50%;
			margin-top: -3px;
			margin-left: -3px;
			width: 0;
			height: 0;
			border-radius: 50%;
			border: 8px solid transparent;
			border-top-color: #000;
		}

		.spinner .spinner-container:before {
			animation: spin 4s linear infinite;
		}

		.quiz-result {
			font-size: 24px;
			font-weight: bold;
			margin-bottom: 20px;
		}

		.btn {
			display: inline-block;
			padding: 10px 20px;
			border-radius: 5px;
			background-color: #000;
			color: #fff;
			font-size: 18px;
			font-weight: bold;
			text-decoration: none;
		}

		.btn:hover {
			background-color: #333;
		}

		@keyframes spin {
			to {
				transform: rotate(360deg);
			}
		}
	</style>
</head>
<body>
	<div class="quiz-container">
		<div class="spinner">
			<div class="spinner-container"></div>
		</div>
		<div class="quiz-result">Поздравляем! Ваши ответы приняты, вы можете принять участие в розыгрыше призов</div>
		<a href="#" class="btn">Перейти</a>
	</div>
</body>
</html>
