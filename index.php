<div id="spinner" class="spinner-border" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div id="result" style="display:none;">
  <p>Вы ответили на все вопросы!</p>
  <button onclick="redirectToPrizePage()">Перейти</button>
</div>
// Скрываем блок с результатом и кнопкой "Перейти"
document.getElementById("result").style.display = "none";

// Запускаем вращение спиннера на 4 секунды
setTimeout(function() {
  // Останавливаем спиннер
  document.getElementById("spinner").style.display = "none";
  // Показываем блок с результатом и кнопкой "Перейти"
  document.getElementById("result").style.display = "block";
}, 4000);

function redirectToPrizePage() {
  // Здесь вы можете добавить код для редиректа на страницу с розыгрышем призов
}
