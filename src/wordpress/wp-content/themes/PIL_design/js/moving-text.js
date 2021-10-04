
let text1 = document.querySelector('moving-text');

document.addEventListener('scroll', function(){
  text1.style.left = Math.max( 50, ( window.innerWidth / 10000 ) * window.scrollY ) + '%';
});