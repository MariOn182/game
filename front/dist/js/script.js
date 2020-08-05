let life = document.getElementById("life");
let mana =document.getElementById("mana");
let exp =document.getElementById("exp");
let xp =document.getElementById("xp");
animateProgressBar(life, 200);
animateProgressBar(mana, 100);
animateProgressBar(exp, 300);
animateProgressBar(xp, 400);
//
// function startProgressBar(elem, timer) {
//     let k =  0;
//     let timerId = setInterval(() => {
//         if (k > 99) {
//             clearInterval(timerId);
//         }
//         elem.style.width = `${k++}%`;
//     }, timer);
//
// }
function animateProgressBar(elem, timer) {
  let k = 0,
     isBack = true,
     timerId = setInterval(function () {
      k += isBack ? 1 : -1;
      if (k > 110 || k < -10) isBack = !isBack;

   elem.style.width = `${k}%`;
    }, timer);
}
