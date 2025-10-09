// Fonction pour charger le thème sauvegardé
function loadTheme() {
    const savedTheme = window.localStorage.getItem('theme');

    if (savedTheme === 'dark') {
        document.documentElement.classList.add('dark-theme');
    } else {
        document.documentElement.classList.remove('dark-theme');
    }
}

// Appelle la fonction au chargement de la page
document.addEventListener('DOMContentLoaded', loadTheme);

// Ta fonction toggle reste pareille
function toggle() {
    document.documentElement.classList.toggle('dark-theme');

    if (document.documentElement.classList.contains('dark-theme')) {
        window.localStorage.setItem('theme', 'dark');
    } else {
        window.localStorage.setItem('theme', 'light');
    }
}