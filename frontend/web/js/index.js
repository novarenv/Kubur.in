
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

function checkNav(x){
  if(x.classList.contains("change"))
    closeNav();
  else{
    openNav();
  }
  x.classList.toggle("change");
}

function showLogin(x){
  document.getElementById("login-form").classList.toggle("login-visible");
}

//jQuery below

$(function() {
  $("div#mySidenav").on("mouseleave", function () {
    closeNav();
    document.getElementById("btn-menu").classList.toggle("change");
  });
})