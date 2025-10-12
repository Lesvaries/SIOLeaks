// Ta fonction toggle mise à jour
function toggle() {
    document.documentElement.classList.toggle('dark-theme');

    const icon = document.getElementById('theme-icon');

    if (document.documentElement.classList.contains('dark-theme')) {
        localStorage.setItem('theme', 'dark');
        icon.className = 'fas fa-moon';
    } else {
        localStorage.setItem('theme', 'light');
        icon.className = 'fas fa-sun';
    }
}