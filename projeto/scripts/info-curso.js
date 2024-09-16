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