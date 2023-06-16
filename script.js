 const bar = document.getElementById('bar');
 const nav = document.getElementById('navbar');
 const close = document.getElementById('close');

 if(bar){
    bar.addEventListener('click', () =>{
        nav.classList.add('active');
    })
 }

 if(close){
    close.addEventListener('click', () =>{
        nav.classList.remove('active');
    })
 }


//  cart



var noti = document.getElementsByClassName('.main');
// var select = document.querySelector('.select');
var button = document.getElementsByClassName('.cart');

for(but of button)
{
    but.addEventListener('click',(e)=>{
        var add = Number(noti.getAttribute('data-count')||0);
        noti.setAttribute('data-count', add + 1);
        noti.classList.add('zero');

    })

    }