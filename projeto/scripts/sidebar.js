// sidebar.js
document.addEventListener("DOMContentLoaded", function () {
    const sidebarContainer = document.querySelector('.sidebar-container');
    sidebarContainer.innerHTML = `
        <div class="sidebar">
            <div class="profile">
                <img src="http://localhost/projeto/Images/profiles/user.png" alt="Foto do Usuário" class="profile-photo">
                <span class="profile-name">Nome do Usuário</span>
            </div>
            <nav class="menu">
                <a href="http://localhost/projeto/pages/areadoaluno/cursos_salvos.php" class="menu-item">
                    <span class="material-symbols-rounded">bookmark</span>
                    <p>Cursos Salvos</p>
                </a>
                <a href="http://localhost/projeto/pages/areadoaluno/favoritos.php" class="menu-item">
                    <span class="material-symbols-rounded">favorite</span>
                    <p>Favoritos</p>
                </a>
                <a href="http://localhost/projeto/pages/areadoaluno/notificacoes.php" class="menu-item">
                    <span class="material-symbols-rounded">notifications</span>
                    <p>Notificações</p>
                </a>
                <a href="http://localhost/projeto/pages/areadoaluno/conta.php" class="menu-item">
                    <span class="material-symbols-rounded">account_circle</span>
                    <p>Conta</p>
                </a>
                <a href="http://localhost/projeto/pages/areadoaluno/ajuda.php" class="menu-item">
                    <span class="material-symbols-rounded">help</span>
                    <p>Ajuda</p>
                </a>
                <a href="http://localhost/projeto/pages/home.php" class="menu-item logout">
                    <span class="material-symbols-rounded">logout</span>
                    <p>Sair</p>
                </a>
            </nav>
        </div>
    `;
});
