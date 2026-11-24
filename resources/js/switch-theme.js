const changeColorButton = document.getElementById('theme-toggle');
const moonIcon = document.getElementById('theme-icon-moon');
const sunIcon = document.getElementById('theme-icon-sun');

if(localStorage.getItem('theme') === null) {
    localStorage.setItem('theme', 'light');
}else{
    if(localStorage.getItem('theme') === 'dark') {
        document.documentElement.className = ""
        document.documentElement.classList.add('dark');
        moonIcon.style.display = 'none';
        sunIcon.style.display = 'block';
    }else{
        document.documentElement.className = ""
        document.documentElement.classList.add('light');
        moonIcon.style.display = 'block';
        sunIcon.style.display = 'none';
    }
}

changeColorButton.addEventListener('click', () => {
    if (document.documentElement.classList.contains('dark')) {
        document.documentElement.classList.remove('dark');
        document.documentElement.classList.add('light');
        moonIcon.style.display = 'block';
        sunIcon.style.display = 'none';
        localStorage.setItem('theme', 'light');
    } else {
        document.documentElement.classList.remove('light');
        document.documentElement.classList.add('dark');
        moonIcon.style.display = 'none';
        sunIcon.style.display = 'block';
        localStorage.setItem('theme', 'dark');
    }
});