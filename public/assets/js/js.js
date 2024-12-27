document.addEventListener("DOMContentLoaded", () => {
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggle-btn');
    const mainContent = document.getElementById('main-content');

    if (sidebar && toggleBtn && mainContent) {
        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('collapsed');
        });
    } else {
        console.error('Sidebar, toggle button, or main content element not found!');
    }
});