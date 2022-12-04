// const selector = document.querySelector('.animacion1')
// selector.classList.add('magictime', 'puffIn')



//set timer to 5 seconds, after that, load the magic animation
function myFunction() {
    const selector = document.querySelector('.animacion1')
    selector.classList.add('magictime', 'slideLeftReturn')
}
setTimeout(myFunction, 2000);
