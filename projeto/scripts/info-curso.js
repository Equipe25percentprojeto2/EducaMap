function loadCourseDetails() {
    const courseId = localStorage.getItem('selectedCourseId'); // Recuperar o ID do curso do localStorage

    if (courseId) {
        // Buscar os dados do JSON
        fetch('http://localhost/projeto/cursos.json')
            .then(response => response.json())
            .then(data => {
                const course = data.courses.find(c => c.id === courseId); // Encontrar o curso correspondente ao ID
                if (course) {
                    // Preencher os detalhes do curso na página
                    document.getElementById('course-image').src = course.image;
                    document.getElementById('course-title').textContent = course.title;
                    document.getElementById('course-date').textContent = course.date;
                    document.getElementById('course-time').textContent = course.time;
                    document.getElementById('course-location').textContent = course.location;

                     // Informações da instituição
                    document.getElementById('company-logo').src = course.logoempresa;
                    document.getElementById('company-name').textContent = course.nomeempresa;

                    // Informações adicionais (carga horária, valor e modalidade)
                    document.getElementById('course-hours').textContent = course.cargahoraria;
                    document.getElementById('course-value').textContent = course.valor;
                    document.getElementById('course-mode').textContent = course.modalidade;

                    // Adicionar tags
                    const tagsContainer = document.getElementById('course-tags');
                    tagsContainer.innerHTML = ''; // Limpar tags existentes
                    course.areas.forEach(area => {
                        const tagElement = document.createElement('div');
                        tagElement.className = 'tag';
                        tagElement.textContent = area;
                        tagsContainer.appendChild(tagElement);
                    });

                    // Adicionar textos descritivos
                    document.getElementById('course-description-text').textContent = course.descricao;
                    document.getElementById('course-additional-info').textContent = course.requisitos;

                    const professoresContainer = document.getElementById('professores-container');
                    professoresContainer.innerHTML = ''; // Limpa o container antes de adicionar os professores

                    course.fotoprofessores.forEach((foto, index) => {
                        const nomeProfessor = course.nomesprofessores[index];
                        const professorDiv = document.createElement('div');
                        professorDiv.classList.add('professor-card');

                        professorDiv.innerHTML = `
                            <img src="${foto}" alt="${nomeProfessor}">
                            <p>${nomeProfessor}</p>
                        `;

                        professoresContainer.appendChild(professorDiv);
                    });
                } else {
                    console.error('Curso não encontrado no arquivo JSON.');
                }
            })
            .catch(error => console.error('Erro ao carregar os dados do curso:', error));
    } else {
        console.error('ID do curso não encontrado no localStorage.');
    }
}

// Chamar a função para carregar os detalhes do curso
document.addEventListener('DOMContentLoaded', loadCourseDetails);

function loadThirdContent() {
    const courseId = localStorage.getItem('selectedCourseId');

    if (courseId) {
        fetch('http://localhost/projeto/cursos.json')
            .then(response => response.json())
            .then(data => {
                const course = data.courses.find(c => c.id === courseId);
                if (course) {
                    // Preencher detalhes de contato
                    document.getElementById('course-address').textContent = course.endereco;
                    document.getElementById('course-phone').textContent = course.telefone;
                    document.getElementById('course-hours-operation').textContent = course.horafuncionamento;

                    // Inicializar o mapa Leaflet com a latitude e longitude do curso
                    const map = L.map('map').setView([course.latitude, course.longitude], 16);

                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; OpenStreetMap contributors'
                    }).addTo(map);

                    // Adicionar o marcador no mapa
                    const marker = L.marker([course.latitude, course.longitude]).addTo(map);

                    // Centralizar o mapa no marcador
                    map.setView([course.latitude, course.longitude]);

                    // Adicionar o popup ao marcador (sem abrir automaticamente)
                    marker.bindPopup(`
                        <div style="text-align: center; font-size: 12px; line-height: 1.2; max-width: 500px">
                            <img src="${course.image}" alt="${course.title}" style="width: 250px; height: auto; margin-bottom: 5px; border-radius: 5px;">
                            <h3 style="font-size: 15px; margin: 5px 0;">${course.title}</h3>
                            <div class="infos-container" style="align-items: left;">
                                <div class="card-info">
                                    <span class="material-icons">schedule</span>
                                    <p>${course.date} - ${course.time}</p>
                                </div>
                                <div class="card-info" style="text-align: left;">
                                    <span class="material-icons">share_location</span>
                                    <p>${course.location}</p>
                                </div>
                            </div>
                        </div>
                    `);

                    // Forçar o redimensionamento do mapa após 200ms
                    setTimeout(function() {
                        map.invalidateSize();
                    }, 200);
                }
            })
        .catch(error => console.error('Erro ao carregar o conteúdo:', error));
    }
}

document.addEventListener('DOMContentLoaded', loadThirdContent);
