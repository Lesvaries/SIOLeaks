// Fonction pour charger le thème sauvegardé
function loadTheme() {
    const savedTheme = localStorage.getItem('theme');

    if (savedTheme === 'dark') {
        document.documentElement.classList.add('dark-theme');
        document.getElementById('theme-icon').className = 'fas fa-moon';
    } else {
        document.documentElement.classList.remove('dark-theme');
        document.getElementById('theme-icon').className = 'fas fa-sun';
    }
}

// Appelle la fonction au chargement de la page
document.addEventListener('DOMContentLoaded', loadTheme);

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