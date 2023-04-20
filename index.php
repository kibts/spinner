<!DOCTYPE html>
<html>
<head>
	<title>Мой квиз</title>
	<!-- Добавляем стили спиннера -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.spinner {
		  margin: 100px auto;
		  width: 40px;
		  height: 40px;
		  position: relative;
		}

		.double-bounce1, .double-bounce2 {
		  width: 100%;
		  height: 100%;
		  border-radius: 50%;
		  background-color: #333;
		  opacity: 0.6;
		  position: absolute;
		  top: 0;
		  left: 0;
		  -webkit-animation: sk-bounce 2.0s infinite ease-in-out;
		  animation: sk-bounce 2.0s infinite ease-in-out;
		}

		.double-bounce2 {
		  -webkit-animation-delay: -1.0s;
		  animation-delay: -1.0s;
		}

		@-webkit-keyframes sk-bounce {
		  0%, 100% { -webkit-transform: scale(0.0) }
		  50% { -webkit-transform: scale(1.0) }
		}

		@keyframes sk-bounce {
		  0%, 100% {
		    transform: scale(0.0);
		    -webkit-transform: scale(0.0);
		  } 50% {
		    transform: scale(1.0);
		    -webkit-transform: scale(1.0);
		  }
		}
	</style>
</head>
<body>
	<!-- Добавляем спиннер и блок с результатом -->
	<div class="spinner" id="spinner">
		<div class="double-bounce1"></div>
		<div class="double-bounce2"></div>
	</div>
	<div id="result" style="display:none;">
		<p>Вы ответили на все вопросы!</p>
		<button onclick="redirectToPrizePage()">Перейти</button>
	</div>
	
	<!-- Добавляем скрипт -->
	<script>
		setTimeout(function() {
			document.getElementById("spinner").style.display = "none";
			document.getElementById("result").style.display = "block";
		}, 4000);

		function redirectToPrizePage() {
			window.location.href = "https://example.com/prize-page";
		}
	</script>
</body>
</html>
