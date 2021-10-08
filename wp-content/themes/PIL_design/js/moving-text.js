let text1 = document.getElementById('moving-text')  ;
if (text1 === null){

}
else{
document.addEventListener('scroll', function(){
  text1.style.left = Math.max( 50, ( window.innerWidth / 10000 ) * window.scrollY ) + '%';
});}