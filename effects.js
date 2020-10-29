

var i = 0;
var txt = 'by Shannon Garvie'; 
var speed = 50; 

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("signed").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}