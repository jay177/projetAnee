//ouvrir burger
function openMenu() {
    document.getElementById("bur").style.height = '100%'
    
}
//fermer burger
function closeMenu() {
    document.getElementById("bur").style.height = '0%'
    
}

//aimation souris
window,addEventListener('click', (e) => {

    const rond = document.createElement('div');
    rond.className = 'clickanim';
    rond.style.top = `${e.pageY - 15}px`
    rond.style.left = `${e.pageX - 15}px`
    document.body.appendChild(rond);
    setTimeout(() => {
        rond.remove();
    }, 1500)
})

// proto light mode
var wmode = document.getElementById('jk')
var rmode = document.container

    
if (
  wmode != null  
){
    wmode.addEventListener('click', function(){
        console.log('je suis ici aprés avoie clicker')
        rmode.classList.toggle('white')
    })
}


var bg = document.getElementById("bg")
var moon = document.getElementById("moon")
var mount = document.getElementById("mount")
var ro = document.getElementById("ro")
var txt = document.getElementById("txt")

if (
    bg != null &&
    moon != null &&
    mount != null &&
    ro != null &&
    txt != null 
){


    window,addEventListener('scroll', function(){
        var value = window.scrollY;
    
        bg.style.top = value * 0.5 + 'px';
        moon.style.left = -value * 0.5 + 'px';
        mount.style.top = -value * 0.15 + 'px';
        ro.style.top = value * 0.15 + 'px';
        txt.style.top = value * 1 + 'px';
        
    
    })}


let imgbx = document.querySelectorAll('.imgbx')
imgbx.forEach(popup => popup.addEventListener('click', () => 
{
    popup.classList.toggle('active')
}))





function toggle(){
    var blur = document.getElementById('blur')
    blur.classList.toggle('active');
    var popup = document.getElementById('popup')
    popup.classList.toggle('active');
    
}


function togglee(){
    var blurr = document.getElementById('blur')
    blurr.classList.toggle('active');
    var popupp = document.getElementById('popupp')
    popupp.classList.toggle('active');
}

document.addEventListener("mousemove", function(e){
    const bg = document.querySelector('.bg');
    const yu = document.querySelector('.yu');
    const content = document.querySelector('.content');

    bg.style.width = 100 + e.pageX/100 + '%';
    bg.style.height = 100 + e.pageX/100 + '%';

    yu.style.right = 100 + e.pageX/2 + 'px';

    content.style.left = 100 + e.pageX/3 + 'px';
})

//light mode 

const btnToggle = document.querySelector('.btn-toggle');

btnToggle.addEventListener('click', () => {

    const body = document.body;

    if(body.classList.contains('light')){

        body.classList.add('dark')
        body.classList.remove('light')
        btnToggle.innerHTML = "Go Dark"

    } else if(body.classList.contains('dark')){

        body.classList.add('light')
        body.classList.remove('dark')
        btnToggle.innerHTML = "Go light"

    }

})

//home

const clip = document.querySelectorAll('.clip');
for (let i = 0; i<clip.length; i++){
    clip[i].addEventListener('mouseenter', 
    function(e){
        clip[i].play()
    })
    clip[i].addEventListener('mouseout', function(e){
        clip[i].pause()
    })
}