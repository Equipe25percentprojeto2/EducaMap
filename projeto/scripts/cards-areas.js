fetch('http://localhost/projeto/areas.json') // Caminho para o arquivo JSON
.then(response => response.json())
.then(data => {
    const areasContainer = document.getElementById('areas-container');
    data.areas.forEach(area => {
        // Criar um card para cada área
        const areaCard = document.createElement('div');
        areaCard.classList.add('area-card'); 

        // Inserir o conteúdo do card
        areaCard.innerHTML = `
            <img src="${area['image-area']}" alt="${area['title-area']}">
            <h2>${area['title-area']}</h2>
        `;

        // Adicionar o card ao container
        areasContainer.appendChild(areaCard);
    });
})
.catch(error => console.error('Erro ao carregar o arquivo JSON:', error));