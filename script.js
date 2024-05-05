function toggleAside() {
    var sidebar = document.querySelector('.sidebar');
    var menuToggle = document.querySelector('.menu-toggle');
    
    sidebar.classList.toggle('open');
    menuToggle.classList.toggle('open');
}