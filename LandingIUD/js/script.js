const foot = document.getElemntById('year');

const year = new Date().getFullYear();

foot.innerHTML = year;

const buttonMenu = document.getElemntById('btn-menu')
const list = document.getElementById('nav-items')

buttonMenu.addEventListener('click', () =>{
    show = !show;
    if (show) {
        list.style.display = 'block'
    }else{
        list.style.display = 'none'
    }
})

window.addEventListener('resize', () =>{
    const width = screen.width;

    if (width >= 425.999) {
        list.style.display = 'flex'
    }else{
        list.style = 'none'
        show = false;
    }
})

(function(){
    if (width >= 425.999) {
        list.style.display = 'flex'
    }else{
        list.style = 'none'
    }
})();