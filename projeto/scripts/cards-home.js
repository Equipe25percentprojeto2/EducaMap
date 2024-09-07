// Carregar o arquivo JSON
fetch('http://localhost/projeto/cards.json')
.then(response => response.json())
.then(data => {
    const coursesContainer = document.getElementById('courses-container');
    data.courses.forEach(course => {
    // Criar um card de curso
    const courseCard = document.createElement('div');
    courseCard.classList.add('course-card'); // Adiciona a classe 'course-card' para estilização
    courseCard.innerHTML = `
        <img src="${course.image}" alt="${course.title}">
        <h2>${course.title}</h2>
        <p>Data: ${course.date}</p>
        <p>Horário: ${course.time}</p>
        <p>Local: ${course.location}</p>
    `;
    coursesContainer.appendChild(courseCard);
    });
})
.catch(error => console.error('Erro ao carregar o arquivo JSON:', error));