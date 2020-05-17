document.addEventListener("DOMContentLoaded", () => {
    document.getElementById('hamburger').addEventListener('click',  () => {
        document.getElementById('hamburger').classList.toggle('hamburger_closed');
    })
});
