const changeColorButton = document.getElementById('theme-toggle');
const moonIcon = document.getElementById('theme-icon-moon');
const sunIcon = document.getElementById('theme-icon-sun');


changeColorButton.addEventListener('click', () => {
    if (document.documentElement.classList.contains('dark')) {
        document.documentElement.classList.remove('dark');
        document.documentElement.classList.add('light');
        moonIcon.style.display = 'block';
        sunIcon.style.display = 'none';
    } else {
        document.documentElement.classList.remove('light');
        document.documentElement.classList.add('dark');
        moonIcon.style.display = 'none';
        sunIcon.style.display = 'block';
    }
});