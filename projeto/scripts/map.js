fetch('http://localhost/projeto/cursos.json')
  .then(response => {
    if (!response.ok) {
      throw new Error('Erro ao carregar o arquivo JSON');
    }
    return response.json();
  })
  .then(data => {
    console.log(data); // Verifica se os dados estão corretos

    if (data.courses && Array.isArray(data.courses) && data.courses.length > 0) {
      const primeiroCurso = data.courses[0]; 
      
      // Verificação adicional para latitude e longitude
      if (!primeiroCurso.latitude || !primeiroCurso.longitude) {
        console.error('Coordenadas inválidas para o primeiro curso.');
        return;
      }

      var map = L.map('map').setView([primeiroCurso.latitude, primeiroCurso.longitude], 13);

      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(map);

      const markers = [];
      data.courses.forEach(curso => {
        const latitude = curso.latitude;
        const longitude = curso.longitude;

        if (latitude && longitude) {
          // Estilizando o popup com imagem menor e fonte reduzida
          const popupContent = `
            <div style="text-align: center; font-size: 12px; line-height: 1.2; max-width: 500px">

              <img src="${curso.image}" alt="${curso.title}" style="width: 250px; height: auto; margin-bottom: 5px; border-radius: 5px;">
              <h3 style="font-size: 15px; margin: 5px 0;">${curso.title}</h3>

              <div class="infos-container" style="align-items: left;">
                <div class="card-info">
                  <span class="material-icons">schedule</span>
                  <p>${curso.date} - ${curso.time}</p>
                </div>

                <div class="card-info" style="text-align: left;">
                  <span class="material-icons">share_location</span>
                  <p>${curso.location}</p>
                </div>
              </div>
              
            </div>
          `;

          const marker = L.marker([latitude, longitude]).addTo(map);
          markers.push([latitude, longitude]); // Armazena as coordenadas dos marcadores
          marker.bindPopup(popupContent);

          // Centraliza o mapa no marcador clicado, ajustando a latitude para deslocar o marcador mais abaixo
          marker.on('click', () => {
            const offsetLat = -0.001; // Ajuste esse valor conforme necessário para mover o ponto para cima ou para baixo
            const adjustedLat = latitude - offsetLat;

            map.setView([adjustedLat, longitude], 28); // Ajusta a visualização para deslocar o marcador um pouco abaixo do centro
          });

        } else {
          console.error('Coordenadas inválidas para o curso:', curso.title);
        }
      });

      // Ajusta o mapa para mostrar todos os marcadores
      if (markers.length > 0) {
        map.fitBounds(markers);
      }
    } else {
      console.error('Array de cursos vazio ou inválido.');
    }
  })
  .catch(error => {
    console.error('Erro ao carregar o JSON:', error);
  });
