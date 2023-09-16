
var getComment=document.getElementById('getComment');
var comment=document.querySelector('.comment');
var home=document.querySelector('.home');
var getHome=document.querySelector('#getHome');
var getMenu=document.getElementById('getMenu');
var leftMenu=document.querySelector('.left-menu');
var closeMenu=document.getElementById('closeMenu');


closeMenu.onclick=()=>{
    leftMenu.style.display='none';
}

getMenu.addEventListener("click",()=>{
    leftMenu.style.display='block';
});
getComment.addEventListener("click",()=>{
    home.style.display='none';
    comment.style.display='inherit';
});

getHome.addEventListener("click",()=>{
    home.style.display='inherit';
    comment.style.display='none';
});