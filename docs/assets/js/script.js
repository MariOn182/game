
let life =document.getElementById("life");
let mana =document.getElementById("mana");
let exp =document.getElementById("exp");
let xp =document.getElementById("xp");
startProgressBar(life, 900);
startProgressBar(mana, 1200);
startProgressBar(exp, 600);
startProgressBar(xp, 800);

function startProgressBar(elem, timer) {
    let k =  0;
    let timerId = setInterval(() => {
        if (k > 99) {
            clearInterval(timerId);
        }
        elem.style.width = `${k++}%`;
    }, timer);

}






