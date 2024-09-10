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

// Selecionar todos os dropdowns
document.querySelectorAll('.filter-button').forEach(button => {
    button.addEventListener('click', function(e) {
        // Fechar outros dropdowns abertos
        document.querySelectorAll('.dropdown-content').forEach(content => {
            if (content !== this.nextElementSibling) {
                content.classList.remove('show');
            }
        });

        // Abrir/fechar o dropdown correspondente ao botão clicado
        const dropdownContent = this.nextElementSibling;
        dropdownContent.classList.toggle('show');

        // Impedir que o clique feche imediatamente após abrir
        e.stopPropagation();
    });
});

// Fechar o dropdown ao clicar fora dele
window.addEventListener('click', function() {
    document.querySelectorAll('.dropdown-content').forEach(content => {
        content.classList.remove('show');
    });
});