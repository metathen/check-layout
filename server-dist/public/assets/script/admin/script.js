const panel = document.querySelectorAll('.admin-nav a');
panel.forEach(i => {
    window.location.href === i.href + '/' && i.classList.add('active')
})
console.log(document.querySelector('.user'))
window.location.pathname.startsWith('/user/') && document.querySelector('.user').classList.add('active');