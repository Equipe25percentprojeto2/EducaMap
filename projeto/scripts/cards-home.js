fetch('http://localhost/projeto/cards.json')
.then(response => response.json())
.then(data => {
    const coursesContainer = document.getElementById('courses-container');
    data.courses.forEach(course => {
        const courseCard = document.createElement('div');
        courseCard.classList.add('course-card'); 

        // Formatar a data
        const formattedDate = formatDate(course.date);

        // Criar os spans de áreas
        const areas = course.areas.map(area => `<span class="tag">${area}</span>`).join(' ');

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
                    <span class="material-icons save-icon">bookmark_border</span>
                    <span class="material-icons favorite-icon">favorite_border</span>
                </div>
            </div> <!-- Exibindo as áreas e os ícones na mesma linha -->
        `;
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
