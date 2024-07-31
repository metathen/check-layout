let smartLocDoc=navigator.userAgent, pickclickLoc=(smartLocDoc.match(/iPad/i) || smartLoc.match(/iPhone/)) ? "touchstart" : "click";

const videoList = document.querySelectorAll('#video-box');

window.addEventListener(pickclickLoc, (e) => {
    if(e.target.closest('#video-box')) {
        const el = e.target.closest('#video-box');
        const videos = el.querySelector('#video');
        playVideo(videos, el, videoList);
    }
})

function playVideo(el, icon, arrVideo) {
    const pause = el.paused;
    const action = pause ? 'add' : 'remove';
    arrVideo.forEach(i => {
        i.classList.remove('active');
        i.querySelector('#video').pause()
    });
    pause ? el.play() : el.pause();
    return icon.classList[action]('active')
}