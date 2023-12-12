document.addEventListener('DOMContentLoaded', function() {
  // Déclencher les animations lorsque la page est chargée
  document.querySelector('.content h1').style.opacity = 1;
  document.querySelector('.content p').style.opacity = 1;
  document.querySelector('.content button').style.opacity = 1;
});

function showPopup() {
  document.getElementById('popup').style.display = 'block';
}

function closePopup() {
  document.getElementById('popup').style.display = 'none';
}
function toggleMobileMenu() {
  var menu = document.querySelector('.menu');
  menu.style.display = menu.style.display === 'none' || menu.style.display === '' ? 'flex' : 'none';
}
