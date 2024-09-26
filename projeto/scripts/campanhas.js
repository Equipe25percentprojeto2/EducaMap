document.addEventListener('DOMContentLoaded', () => {
    fetch('http://localhost/projeto/cursos.json')
        .then(response => response.json())
        .then(data => {
            const container = document.querySelector('#campanhas-container');
            if (!container) {
                console.error('Erro: Container de campanhas não encontrado.');
                return;
            }

            data.courses.forEach(curso => {
                const card = document.createElement('div');
                card.className = 'card-campanha';
                
                card.innerHTML = `                                                      
                    <div class="image-section">
                        <img src="${curso.image}" alt="${curso.title}" />
                    </div>
                    <div class="info-section">
                        <h2>${curso.title}</h2>

                        <div class="date-time">
                            <span class="material-symbols-rounded">schedule</span> ${converterData(curso.date)} - ${curso.time}</span>
                        </div>

                        <div class="actions">
                            <span class="material-symbols-rounded">favorite</span> ${curso.QtndFav}</span>
                            <span class="material-symbols-rounded">chat</span> ${curso.QntdComents}</span>
                            <span class="material-symbols-rounded">bookmark</span> ${curso.QntdSaves}</span>
                        </div>

                        <div class="created-date">
                            <span>Criado em: ${converterData(curso.dateCriation)}</span>
                        </div>

                        <div class="buttons">
                            <button class="btn-red">Editar Informações</button>
                            <button class="btn-outlined-blue">Visualizar Insights</button>
                            <button class="btn-outlined-blue">Mais Opções</button>
                        </div>
                    </div>
                `;

                container.appendChild(card);
            });
        })
        .catch(error => console.error('Erro ao carregar os cursos:', error));
});

// Define a função converterData antes de usá-la
function converterData(data) {
    if (!data) {
        console.error("Data inválida fornecida:", data);
        return "Data inválida"; // Ou algum valor padrão para datas inválidas
    }

    // Se o formato da data for algo como '2024-09-25'
    const partes = data.split('-');
    if (partes.length !== 3) {
        console.error("Formato de data inesperado:", data);
        return "Data inválida";
    }

    const ano = partes[0];  // Primeiro elemento é o ano
    const mes = partes[1];  // Segundo elemento é o mês
    const dia = partes[2];  // Terceiro elemento é o dia

    // Retorna no formato desejado: dd/mm/yyyy
    return `${dia}/${mes}/${ano}`;
}
