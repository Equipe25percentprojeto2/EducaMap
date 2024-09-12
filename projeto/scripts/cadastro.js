let currentSection = 1; // Variável para rastrear a seção atual

// Função para verificar se todos os campos obrigatórios da seção foram preenchidos
function checkInputs(sectionNumber) {
  const section = document.getElementById('section' + sectionNumber);
  const inputs = section.querySelectorAll('input, select');
  let isValid = true;

  inputs.forEach(input => {
    if (!input.checkValidity()) {
      input.classList.add('is-invalid'); // Adiciona a classe de erro visual
      isValid = false;
    } else {
      input.classList.remove('is-invalid'); // Remove a classe se estiver válido
    }
  });

  return isValid;
}

// Função para avançar para a próxima seção
function nextSection(sectionNumber) {
  if (checkInputs(currentSection)) { // Verifica se os inputs estão preenchidos
    const currentSectionElement = document.getElementById('section' + currentSection);
    const nextSectionElement = document.getElementById('section' + sectionNumber);

    if (nextSectionElement) {
      currentSectionElement.style.display = 'none';
      nextSectionElement.style.display = 'block';
      updateProgress(sectionNumber);

      currentSection = sectionNumber; // Atualiza a seção atual
    }
  } else {
    alert('Por favor, preencha todos os campos obrigatórios.');
  }
}

// Função para voltar para a seção anterior
function previousSection(sectionNumber) {
  const currentSectionElement = document.getElementById('section' + currentSection);
  const previousSectionElement = document.getElementById('section' + sectionNumber);

  if (previousSectionElement) {
    currentSectionElement.style.display = 'none';
    previousSectionElement.style.display = 'block';
    updateProgress(sectionNumber);

    currentSection = sectionNumber; // Atualiza a seção atual
  }
}

// Função para atualizar a barra de progresso
function updateProgress(sectionNumber) {
  const progressBoxes = document.querySelectorAll('.progress-box');

  progressBoxes.forEach((box, index) => {
    if (index < sectionNumber) {
      box.classList.add('active');
    } else {
      box.classList.remove('active');
    }
  });
}

// Função para validar o formulário completo na última seção
//document.getElementById('registrationForm').addEventListener('submit', function(e) {
  if (!checkInputs(4)) { // Verifica a última seção
    e.preventDefault(); // Impede o envio se houver erros
    alert('Por favor, preencha todos os campos obrigatórios.');
  }
//});
