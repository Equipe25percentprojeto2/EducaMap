// Ao clicar no botão, alterna o estado da sidebar e salva no localStorage
document.getElementById('open_btn').addEventListener('click', function () {
    document.getElementById('sidebar').classList.toggle('open_sidebar');
    
    // Verifica o estado atual da sidebar e salva no localStorage
    if (document.getElementById('sidebar').classList.contains('open_sidebar')) {
        localStorage.setItem('sidebarState', 'open');
    } else {
        localStorage.setItem('sidebarState', 'closed');
    }
});

// Ao carregar a página, verifica o estado salvo no localStorage e aplica a classe adequada
window.addEventListener('load', function () {
    const sidebarState = localStorage.getItem('sidebarState');
    
    if (sidebarState === 'open') {
        document.getElementById('sidebar').classList.add('open_sidebar');
    } else {
        document.getElementById('sidebar').classList.remove('open_sidebar');
    }
});
