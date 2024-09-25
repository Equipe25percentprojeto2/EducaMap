document.getElementById('banner-input').addEventListener('change', function() {
    const fileName = this.files[0].name;
    document.getElementById('file-name').textContent = fileName;
});

// Passar da área 1 para a área 2
document.getElementById("btn-proximo").addEventListener("click", function(e) {
    e.preventDefault();
    document.getElementById("step1").classList.add("hidden");
    document.getElementById("step2").classList.remove("hidden");
});

// Voltar da área 2 para a área 1
document.getElementById("btn-voltar").addEventListener("click", function(e) {
    e.preventDefault();
    document.getElementById("step2").classList.add("hidden");
    document.getElementById("step1").classList.remove("hidden");
});

// Passar da área 2 para a área 3
const btnProximo2 = document.getElementById("btn-proximo-2");
if (btnProximo2) {
    btnProximo2.addEventListener("click", function(e) {
        e.preventDefault();
        document.getElementById("step2").classList.add("hidden");
        document.getElementById("step3").classList.remove("hidden");
    });
}

// Voltar da área 3 para a área 2
document.getElementById("btn-voltar-2").addEventListener("click", function(e) {
    e.preventDefault();
    document.getElementById("step3").classList.add("hidden");
    document.getElementById("step2").classList.remove("hidden");
});

// Função de pré-visualização da imagem ajustada
function previewImage(event, input) {
    const file = input.files[0];
    const reader = new FileReader();
    const previewImg = input.parentElement.querySelector('.foto-preview');
    const plusSign = document.querySelector('.plus-sign');

    reader.onload = function(e) {
        previewImg.src = e.target.result;
        previewImg.style.display = 'block';  // Exibir a imagem pré-visualizada
        plusSign.style.display = 'none'; // Oculta o sinal de +
    };

    if (file) {
        reader.readAsDataURL(file);
    } else {
        previewImg.style.display = 'none';  // Esconder a imagem se não houver arquivo selecionado
        plusSign.style.display = 'block'; // Exibe o sinal de + novamente
    }
}

// Função para adicionar um novo grupo de inputs de professor
function adicionarNovoGrupoProfessor() {
    const originalInputs = document.querySelector('.inputs-professor');
    const clonedInputs = originalInputs.cloneNode(true);

    // Limpar os valores do clone
    clonedInputs.querySelector('.form-control').value = '';
    clonedInputs.querySelector('.file-input').value = '';
    clonedInputs.querySelector('.foto-preview').style.display = 'none';  // Esconde a imagem no clone

    // Remover evento de pré-visualização da imagem e adicionar um novo
    clonedInputs.querySelector('.file-input').onchange = function(event) {
        previewImage(event, this);
    };

    // Adicionar o novo grupo ao container
    document.getElementById('container-professores').appendChild(clonedInputs);

    // Esconder o botão "Adicionar Professor" nos grupos anteriores
    const allGroups = document.querySelectorAll('.inputs-professor');
    allGroups.forEach((group, index) => {
        const btnAdicionar = group.querySelector('.btn-adicionar');
        if (index < allGroups.length - 1) {
            btnAdicionar.style.display = 'none';  // Esconder o botão nos grupos anteriores
        } else {
            btnAdicionar.style.display = 'block';  // Exibir o botão apenas no último grupo
        }
    });
}

function enviarInformacoes() {
    const linkInscricao = document.getElementById('link-inscricao').value;
    const telefoneContato = document.getElementById('telefone-contato').value;

    // Verificar se os campos estão preenchidos
    if (!linkInscricao || !telefoneContato) {
        alert("Por favor, preencha todos os campos.");
        return;
    }

    // Aqui você pode processar ou enviar as informações
    console.log('Link de Inscrição:', linkInscricao);
    console.log('Telefone para Contato:', telefoneContato);

    // Exemplo de alerta para mostrar os dados coletados
    alert(`Link de Inscrição: ${linkInscricao}\nTelefone para Contato: ${telefoneContato}`);
}
