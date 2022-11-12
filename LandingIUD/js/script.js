const foot = document.getElementById('year');

const year = new Date().getFullYear();

foot.innerHTML = year

// MENU
const buttonMenu = document.getElementById('btn-menu')
const list = document.getElementById('nav-items')

list.style.display = 'none'

let show = false;

buttonMenu.addEventListener('click', () => {
    show = !show;
    if(show){
        list.style.display = 'none'
    }else{
        list.style.display = 'flex'
    }
})