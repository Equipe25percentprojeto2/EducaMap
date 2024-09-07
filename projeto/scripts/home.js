// Seleciona o botão do dropdown e o menu
const dropdownBtn = document.querySelector('.dropdown-btn');
const dropdownMenu = document.querySelector('.dropdown-menu');
const dropdownIcon = document.querySelector('.dropdown-icon');

// Adiciona o evento de clique
dropdownBtn.addEventListener('click', function() {
    // Alterna a classe 'show' para mostrar ou esconder o menu
    dropdownMenu.classList.toggle('show');
    // Alterna a classe 'rotate' no ícone do chevron
    dropdownIcon.classList.toggle('rotate');
});

// Fechar o dropdown ao clicar fora dele
window.addEventListener('click', function(event) {
    if (!dropdownBtn.contains(event.target)) {
        dropdownMenu.classList.remove('show');
        dropdownIcon.classList.remove('rotate');
    }
});