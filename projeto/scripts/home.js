// Selecionar todos os botões e menus de dropdown
const dropdownButtons = document.querySelectorAll('.filter-button');
const dropdownIcons = document.querySelectorAll('.material-symbols-rounded');
const selectedFiltersDiv = document.getElementById('selected-filters');

// Limite máximo de filtros
const maxFilters = 4;

// Adiciona evento de clique para cada botão
dropdownButtons.forEach((dropdownBtn, index) => {
    const dropdownMenu = dropdownBtn.nextElementSibling;
    const dropdownIcon = dropdownIcons[index];

    dropdownBtn.addEventListener('click', function(e) {
        e.stopPropagation();

        // Fecha outros dropdowns abertos
        document.querySelectorAll('.dropdown-content').forEach(content => {
            if (content !== dropdownMenu) {
                content.classList.remove('show');
            }
        });

        // Alterna a exibição do menu dropdown
        dropdownMenu.classList.toggle('show');
        dropdownIcon.classList.toggle('rotate');
    });
});

// Capturar a opção selecionada e exibi-la
document.querySelectorAll('.dropdown-content a').forEach(option => {
    option.addEventListener('click', function(e) {
        e.preventDefault(); // Impede o comportamento padrão de links

        // Verifica se o link tem o atributo 'data-filter'
        const filterText = this.getAttribute('data-filter');
        
        if (!filterText) {
            console.error('O item não possui o atributo "data-filter".');
            return; // Se o 'data-filter' estiver faltando, não faça nada
        }

        const filterType = filterText.split(":")[0]; // Exemplo: "Data de início"

        // Verifica se já existe uma opção selecionada desse filtro
        const existingFilter = document.querySelector(`.selected-filter[data-filter-type="${filterType}"]`);
        if (existingFilter) {
            // Atualiza o valor se já houver um filtro desse tipo
            existingFilter.textContent = filterText;
        } else {
            // Cria um novo elemento para o filtro selecionado
            const newFilter = document.createElement('div');
            newFilter.classList.add('selected-filter');
            newFilter.setAttribute('data-filter-type', filterType);
            newFilter.textContent = filterText;

            // Adiciona um evento de clique para remover o filtro
            newFilter.addEventListener('click', function() {
                selectedFiltersDiv.removeChild(newFilter);
            });

            selectedFiltersDiv.appendChild(newFilter);
        }

        // Fecha o dropdown após a seleção
        const dropdownMenu = this.closest('.dropdown-content');
        dropdownMenu.classList.remove('show');
        const dropdownIcon = dropdownMenu.previousElementSibling.querySelector('.material-symbols-rounded');
        dropdownIcon.classList.remove('rotate');
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const userDropdownBtn = document.querySelector('.dropdown-btn'); // Botão de dropdown
    const userMenu = document.querySelector('.dropdown-menu'); // Menu dropdown

    if (userDropdownBtn && userMenu) {
        // Adiciona evento de clique ao botão de dropdown
        userDropdownBtn.addEventListener('click', function (e) {
            e.stopPropagation(); // Previne que o clique feche o menu
            
            // Alterna a visibilidade do dropdown
            userMenu.classList.toggle('show-dropdown');
        });

        // Fecha o dropdown se clicar fora do botão/menu
        document.addEventListener('click', function (e) {
            if (!userMenu.contains(e.target) && !userDropdownBtn.contains(e.target)) {
                userMenu.classList.remove('show-dropdown');
            }
        });
    }
});



