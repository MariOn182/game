const life = document.getElementById('life');
const mana = document.getElementById('mana');
const exp = document.getElementById('exp');
const xp = document.getElementById('xp');

const new_xp = document.getElementById('new_xp');

animateProgressBar(life, 200);
animateProgressBar(mana, 100);
animateProgressBar(exp, 300);
animateProgressBar(xp, 400);

animateNewXp(new_xp);

function animateNewXp(new_xp) {
    setInterval(() => {
        new_xp.classList.remove('hidden');
        new_xp.classList.add('new-xp-points');
        setTimeout(() => {
            new_xp.classList.remove('new-xp-points');
            new_xp.classList.add('hidden');
        }, 3000);
    }, 6000);
}

function animateProgressBar(elem, timer) {
    let k = 0,
        isBack = true,
        timerId = setInterval(function () {
            k += isBack ? 1 : -1;
            if (k > 110 || k < -10) isBack = !isBack;

            elem.style.width = `${k}%`;
        }, timer);
}
