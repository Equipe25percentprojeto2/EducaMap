//Tela de cadastro
let currentSection = 1; // Variável para rastrear a seção atual

function nextSection(sectionNumber) {
  // Obter as seções atuais e a próxima
  const currentSectionElement = document.getElementById('section' + currentSection);
  const nextSectionElement = document.getElementById('section' + sectionNumber);
  
  // Verificar se a próxima seção existe
  if (nextSectionElement) {
    // Esconder a seção atual
    currentSectionElement.style.display = 'none';
    // Mostrar a próxima seção
    nextSectionElement.style.display = 'block';
    // Atualizar o progresso visual
    updateProgress(sectionNumber);
    
    // Atualizar o número da seção atual
    currentSection = sectionNumber;
  }
}

function previousSection(sectionNumber) {
  // Obter as seções atuais e a anterior
  const currentSectionElement = document.getElementById('section' + currentSection);
  const previousSectionElement = document.getElementById('section' + sectionNumber);
  
  // Verificar se a seção anterior existe
  if (previousSectionElement) {
    // Esconder a seção atual
    currentSectionElement.style.display = 'none';
    // Mostrar a seção anterior
    previousSectionElement.style.display = 'block';
    // Atualizar o progresso visual
    updateProgress(sectionNumber);
    
    // Atualizar o número da seção atual
    currentSection = sectionNumber;
  }
}

function updateProgress(sectionNumber) {
  // Obter todas as caixas de progresso
  const progressBoxes = document.querySelectorAll('.progress-box');
  
  // Remover a classe 'active' de todas as caixas de progresso
  progressBoxes.forEach(box => box.classList.remove('active'));

  // Adicionar a classe 'active' à caixa correspondente à seção atual
  const activeBox = document.getElementById('box' + sectionNumber);
  
  if (activeBox) {
    activeBox.classList.add('active');
  }
}

function updateProgress(sectionNumber) {
  // Obter todas as caixas de progresso
  const progressBoxes = document.querySelectorAll('.progress-box');
  
  // Remover a classe 'active' de todas as caixas de progresso
  progressBoxes.forEach(box => box.classList.remove('active'));

  // Adicionar a classe 'active' à caixa correspondente à seção atual
  const activeBox = document.getElementById('box' + sectionNumber);
  
  if (activeBox) {
    activeBox.classList.add('active');
  }
}
