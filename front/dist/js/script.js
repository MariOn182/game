const life = document.getElementById('life');
const mana = document.getElementById('mana');
const exp = document.getElementById('exp');
let timerId;

const new_xp = document.getElementById('new_xp');

animateProgressBar(life, 200);
animateProgressBar(mana, 100);
animateProgressBar(exp, 300);


// animateXpProgressBar(xp, 100);

animateNewXp(new_xp, 3000, 5000);

function animateNewXp(new_xp, css_animation_duration, popup_duration) {
    setInterval(() => {
        new_xp.classList.remove('hidden');
        new_xp.classList.add('new-xp-points');
        setTimeout(() => {
            new_xp.classList.remove('new-xp-points');
            new_xp.classList.add('hidden');
        }, css_animation_duration);
    }, popup_duration);
}
function animateProgressBar(elem, timer) {
    let k = 0,
        isForward = true,
        timerId = setInterval(function () {
            k += isForward ? 1 : -1;
            if (k > 100 || k < 0) isForward = !isForward;

            elem.style.width = `${k}%`;
        }, timer);
}


function startXpProgressBar() {

    if (document.getElementById('main').checked) setXpProgressBar(document.getElementById('points').value, document.getElementById('maxPoints').value, document.getElementById('blocks').value);
    else {
        infiniteXpProgressBar(100);

    }
}
function infiniteXpProgressBar(timer) {
    const xp = document.getElementById('xp');
    const nodes = xp.getElementsByClassName('progress-bar_xp');
    let k = 0,
        l = 0,
        isForward = true;
    timerId = setInterval(function () {
        k += isForward ? 1 : -1;
        if (k > 100 && isForward) {l++;k = 0;} else if (k < 0 && !isForward) {l--;k = 100;}
        if (l >= nodes.length || l < 0)isForward = !isForward;
        else {nodes[l].style.width = `${k}%`;}
    }, timer);

}
function setXpProgressBar(points, maxPoints, blocksCount) {
    clearInterval(timerId);
    const xp = document.getElementById('xp');
    let list = document.getElementsByClassName('progress-bg_xp');
    const inOneBlock = maxPoints / blocksCount;
    let node = list[0].cloneNode(true) ;
    node.getElementsByClassName('progress-bar_xp')[0].style.width = 0;

    while (xp.firstChild) {
        xp.removeChild(xp.firstChild);
    }
    for (let k = 0;k < blocksCount;k++) {
        xp.append(node);
        node = node.cloneNode(true);
    }

    list = document.getElementsByClassName('progress-bar_xp');
    let i = 0;
    while (points > inOneBlock) {
        points -= inOneBlock;
        list[i].style.width = `${100}%`;
        i++;
    }

    list[i].style.width = `${(points / inOneBlock * 100)}%`;

   // затем остаток часть
}
