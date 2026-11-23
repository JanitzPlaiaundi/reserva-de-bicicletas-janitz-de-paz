if (localStorage.getItem('theme') === 'dark') {
    const link = document.getElementById('theme-stylesheet');
    if (link) {
        link.href = link.dataset.dark;
    }
    document.documentElement.classList.remove('light');
    document.documentElement.classList.add('dark');
}