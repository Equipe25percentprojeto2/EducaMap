// sidebar.js
document.addEventListener("DOMContentLoaded", function () {
    const sidebarContainer = document.querySelector('.sidebar-emp-container');
    sidebarContainer.innerHTML = `
        <div class="sidebar">
            <div class="profile">
                <img src="http://localhost/projeto/Images/profiles/learn.png" alt="Foto do Usuário" class="profile-photo">
                <span class="profile-name">Instituto Learn</span>
            </div>
            <nav class="menu">
                <a href="http://localhost/projeto/pages/empresas/dashboard.php" class="menu-item">
                    <span class="material-symbols-rounded">home</span>
                    <p>Dashboard</p>
                </a>
                <a href="http://localhost/projeto/pages/empresas/campanhas.php" class="menu-item">
                    <span class="material-symbols-rounded">flag</span>
                    <p>Campanhas</p>
                </a>
                <a href="http://localhost/projeto/pages/empresas/insights.php" class="menu-item">
                    <span class="material-symbols-rounded">insights</span>
                    <p>Insights</p>
                </a>
                <a href="http://localhost/projeto/pages/empresas/relatorios.php" class="menu-item">
                    <span class="material-symbols-rounded">comment</span>
                    <p>Relatórios</p>
                </a>
                <a href="http://localhost/projeto/pages/empresas/ajuda-emp.php" class="menu-item">
                    <span class="material-symbols-rounded">help</span>
                    <p>Ajuda</p>
                </a>
                <a href="http://localhost/projeto/pages/empresas/login-emp.php" class="menu-item logout">
                    <span class="material-symbols-rounded">logout</span>
                    <p>Sair</p>
                </a>
            </nav>
        </div>
    `;
});
