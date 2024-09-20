// Seleciona o botão do dropdown e o menu
const dropdownBtn = document.querySelector('.dropdown-btn');
const dropdownMenu = document.querySelector('.dropdown-menu');
const dropdownIcon = document.querySelector('.dropdown-icon');


// Adiciona evento de clique a cada botão
dropdownButtons.forEach((dropdownBtn, index) => {
    const dropdownMenu = dropdownBtn.nextElementSibling;
    const dropdownIcon = dropdownIcons[index];

    dropdownBtn.addEventListener('click', function(e) {
        // Impedir que o clique no botão feche imediatamente após abrir
        e.stopPropagation();

        // Alterna a exibição do menu dropdown
        dropdownMenu.classList.toggle('show');
        dropdownIcon.classList.toggle('rotate');
    });
});

// Fechar o dropdown ao clicar fora dele
window.addEventListener('click', function() {
    dropdownButtons.forEach((dropdownBtn, index) => {
        const dropdownMenu = dropdownBtn.nextElementSibling;
        const dropdownIcon = dropdownIcons[index];

        dropdownMenu.classList.remove('show');
        dropdownIcon.classList.remove('rotate');
    });
});

// Fechar o dropdown ao clicar fora, exceto se for no botão
window.addEventListener('click', function(event) {
    dropdownButtons.forEach((dropdownBtn, index) => {
        const dropdownMenu = dropdownBtn.nextElementSibling;
        const dropdownIcon = dropdownIcons[index];

        if (!dropdownBtn.contains(event.target)) {
            dropdownMenu.classList.remove('show');
            dropdownIcon.classList.remove('rotate');
        }
    });
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

// Direcionar para a página do card
document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.card'); // Selecione os cards

    cards.forEach(card => {
        card.addEventListener('click', () => {
            const courseId = card.getAttribute('data-id');
            localStorage.setItem('selectedCourseId', courseId); // Salva o ID no localStorage
            window.location.href = 'http://localhost/projeto/pages/info-curso.php'; // Redireciona para a página de detalhes
        });
    });
});