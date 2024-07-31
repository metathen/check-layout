const panel = document.querySelectorAll('.panel-nav a');
panel.forEach(i => window.location.href === i.href + '/' && i.classList.add('active'))

const user = document.querySelector('.user')
const userList = document.querySelector('.user-list')
const userEl = document.querySelectorAll('.user-list li');

mobileSwiper(user, userList, userEl)

function mobileSwiper(swipe, wrapper, arr) {
    const action = screen.width < 500 ? "add" : "remove"
    swipe.classList[action]('swiper');
    wrapper.classList[action]('swiper-wrapper');
    arr.forEach(i => i.classList[action]('swiper-slide'));
    try {
        screen.width < 500 && new Swiper('.user', {
            slidesPerView: 1,
            spaceBetween: 20,
            effect: "fade",
            navigation: {
                prevEl: ".user-prev",
                nextEl: ".user-next"
            }
        });
    } catch (error) {
        console.error(error);
    }
}