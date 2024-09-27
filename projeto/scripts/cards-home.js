fetch('http://localhost/projeto/cursos.json')
    .then(response => response.json())
    .then(data => {
        const coursesContainer = document.getElementById('courses-container');
        data.courses.forEach(course => {
            // Criar o card de curso
            const courseCard = document.createElement('div');
            courseCard.classList.add('course-card'); 
            courseCard.setAttribute('data-id', course.id); // Adiciona o ID como atributo data-id

            // Formatar a data
            const formattedDate = formatDate(course.date);

            // Criar os spans de áreas
            const areas = course.areas.map(area => `<span class="tag">${area}</span>`).join(' ');

            // Preencher o conteúdo do card
            courseCard.innerHTML = `
                <img src="${course.image}" alt="${course.title}">
                <h2>${course.title}</h2>
                
                <div class="card-info">
                    <span class="material-icons">schedule</span>
                    <p>${formattedDate} - ${course.time}</p>
                </div>
                <div class="card-info">
                    <span class="material-icons">share_location</span>
                    <p>${course.location}</p>
                </div>

                <div class="areas-icons-container">
                    <div class="areas">${areas}</div>
                    <div class="icons">
                        <span class="material-icons save-icon">${course.isSaved ? 'bookmark' : 'bookmark_border'}</span>
                        <span class="material-icons favorite-icon">${course.isFavorite ? 'favorite' : 'favorite_border'}</span>
                    </div>
                </div>
            `;

            // Adiciona o evento de clique para redirecionar para a página de detalhes
            courseCard.addEventListener('click', () => {
                localStorage.setItem('selectedCourseId', course.id); // Salva o ID no localStorage
                window.location.href = `info-curso.php?id=${course.id}`; // Redireciona para a página de detalhes
            });

            // Prevenir o redirecionamento ao clicar nos ícones
            courseCard.querySelector('.save-icon').addEventListener('click', (event) => {
                event.stopPropagation(); // Evita redirecionamento

                // Toggle entre salvar e não salvo
                course.isSaved = !course.isSaved;
                event.target.textContent = course.isSaved ? 'bookmark' : 'bookmark_border'; // Muda o ícone visualmente

                // Aqui você pode adicionar uma lógica para atualizar o JSON ou localStorage, se necessário
            });

            courseCard.querySelector('.favorite-icon').addEventListener('click', (event) => {
                event.stopPropagation(); // Evita redirecionamento

                // Toggle entre favoritar e não favoritado
                course.isFavorite = !course.isFavorite;
                event.target.textContent = course.isFavorite ? 'favorite' : 'favorite_border'; // Muda o ícone visualmente

                // Aqui você pode adicionar uma lógica para atualizar o JSON ou localStorage, se necessário
            });

            // Adicionar o card ao contêiner
            coursesContainer.appendChild(courseCard);
        });
    })
    .catch(error => console.error('Erro ao carregar o arquivo JSON:', error));

// Função de formatação da data (fora do fetch)
function formatDate(dateString) {
    const months = [
        'janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho',
        'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'
    ];

    const date = new Date(dateString);
    const day = date.getDate();
    const month = months[date.getMonth()];
    const year = date.getFullYear();

    return `${day} de ${month} de ${year}`;
}
