var acc = document.getElementsByClassName("secteur__accordion");
var accSecteur = document.getElementsByClassName('');
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "flex") {
      panel.style.display = "none";
    } else {
      panel.style.display = "flex";
    }
  });
}

let button = document.getElementsByClassName('secteur__btn');

button.addEventListener("click", () => {
    if (  this.css( "transform" ) == 'none' ){
       this.css("transform","rotate(180deg)");
    } else {
       this.css("transform","" );
    };
});
