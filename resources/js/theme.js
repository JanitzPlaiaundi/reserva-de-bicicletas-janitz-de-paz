document.addEventListener('DOMContentLoaded', () => {
    const themeToggleBtn = document.getElementById('theme-toggle');
    const themeStylesheet = document.getElementById('theme-stylesheet');
    const moonIcon = document.getElementById('theme-icon-moon');
    const sunIcon = document.getElementById('theme-icon-sun');

    if (!themeToggleBtn || !themeStylesheet) return;

    const lightCss = themeStylesheet.dataset.light;
    const darkCss = themeStylesheet.dataset.dark;

    function updateButton(theme) {
        if (!moonIcon || !sunIcon) return;

        if (theme === 'dark') {
            moonIcon.style.display = 'none';
            sunIcon.style.display = 'block';
            themeToggleBtn.setAttribute('title', 'Switch to light mode');
        } else {
            moonIcon.style.display = 'block';
            sunIcon.style.display = 'none';
            themeToggleBtn.setAttribute('title', 'Switch to dark mode');
        }
    }

    const currentTheme = localStorage.getItem('theme') || 'light';
    updateButton(currentTheme);

    themeToggleBtn.addEventListener('click', () => {
        const isDark = themeStylesheet.getAttribute('href') === darkCss;

        if (isDark) {
            themeStylesheet.setAttribute('href', lightCss);
            document.documentElement.classList.remove('dark');
            document.documentElement.classList.add('light');
            localStorage.setItem('theme', 'light');
            updateButton('light');
        } else {
            themeStylesheet.setAttribute('href', darkCss);
            document.documentElement.classList.remove('light');
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
            updateButton('dark');
        }
    });
});