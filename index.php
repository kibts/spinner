<!DOCTYPE html>
<html>
  <head>
    <title>Квиз</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
      body {
        background-color: #fdd4ce;
      }
      .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }
      .spinner {
        border: 16px solid #f3f3f3;
        border-top: 16px solid #333;
        border-radius: 50%;
        width: 120px;
        height: 120px;
        animation: spin 2s linear infinite;
      }
      @keyframes spin {
        0% {
          transform: rotate(0deg);
        }
        100% {
          transform: rotate(360deg);
        }
      }
      .button {
        display: none;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: black;
        color: white;
        font-size: 20px;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      .button.show {
        display: block;
      }
      @media (max-width: 480px) {
        .spinner {
          width: 80px;
          height: 80px;
          border-width: 8px;
        }
        .button {
          font-size: 16px;
          padding: 8px 16px;
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="spinner"></div>
      <button class="button" id="button" onclick="redirectToPrize()">Перейти</button>
    </div>
    <script>
      function redirectToPrize() {
        window.location.href = "https://example.com/prize";
      }
      setTimeout(function() {
        document.querySelector('.spinner').style.display = 'none';
        document.querySelector('.button').classList.add('show');
      }, 4000);
    </script>
  </body>
</html>
