let smartLoc=navigator.userAgent, pickclick=(smartLoc.match(/iPad/i) || smartLoc.match(/iPhone/)) ? "touchstart" : "click",
stateMenu=false, stateAuth=false;

try { 
    new Swiper('.feed-swiper', {
        slidesPerView: 1,
        spaceBetween: 40,
        navigation: {
            prevEl: '.feed-prev',
            nextEl: '.feed-next'
        }
    })
    new Swiper('.comm-swiper', {
        slidesPerView: 1,
        effect: "fade",
        speed: 1000,
        navigation: {
            prevEl: '.comm-prev',
            nextEl: '.comm-next'
        }
    })
    new Swiper('.last-swiper', {
        slidesPerView: 1,
        effect: "fade",
        speed: 1000,
        loop: true,
        pagination: {
            el: ".last-pag",
            clickable: true
        }
    })
} catch (error) {
    console.error(error);
}

const accessSwipe = document.querySelector('.access-swiper');
const accessWrapper = document.querySelector('.access-items');
const accessSlide = document.querySelectorAll('.access li');

//Header El
const menuBtn = document.querySelector('.header-mobile');
const mobileEl = document.querySelectorAll('.mobile-menu li');
const modal = document.querySelector('.modal');
const menuMobile = document.querySelector('.mobile-menu');

const questEl = document.querySelectorAll('.quest-list li');

//Modal El
const authBlock = document.querySelector('.auth');

menuBtn.addEventListener(pickclick, () => {
    stateMenu = !stateMenu;
    return checkState(stateMenu, modal, menuMobile, document.querySelector('.header-mobile'));
})

mobileSwiper(accessSwipe, accessWrapper, accessSlide);

window.addEventListener('resize', () => mobileSwiper(accessSwipe, accessWrapper, accessSlide))

//glob click
window.addEventListener(pickclick, (e) => {
    if(e.target.closest('.mobile-menu a')) {
        stateMenu = false;
        return checkState(stateMenu, modal, menuMobile, document.querySelector('.header-mobile'));
    }
    if(e.target.closest('[data-sign]')) {
        stateAuth = true;
        return checkState(stateAuth, modal, authBlock)
    }
    if(e.target.closest('.modal')) {
        stateAuth=false;
        return checkState(stateAuth, modal, authBlock);
    }
    if(e.target.closest('.quest-list li')) {
        const el = e.target.closest('.quest-list li');
        questEl.forEach(i => i.classList.remove('active'))
        el.classList.add('active');
    }
})

function mobileSwiper(swipe, wrapper, arr) {
    const action = screen.width < 500 ? "add" : "remove"
    swipe.classList[action]('swiper');
    wrapper.classList[action]('swiper-wrapper');
    arr.forEach(i => i.classList[action]('swiper-slide'));
    try {
        screen.width < 500 && new Swiper('.access-swiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                prevEl: '.access-prev',
                nextEl: '.access-next'
            }
        });
    } catch (error) {
        console.error(error);
    }
}

//check menu state
function checkState(state, mask, el, i) {
    const action = state ? 'add' : 'remove';
    document.body.classList[action]('stuck');
    mask.classList[action]('active');
    el.classList[action]('active');
    i && i.classList[action]('active');
}