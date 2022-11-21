const menu= document.querySelector('#mobile-menu')
const menuLinks= document.querySelector('.navbar_menu')

menu.addEventListener('click',function() {
    menu.classList.toggle('is-active')
    menuLinks.classList.toggle('active');
})

$(function(){
    $(".dropdown-item").click(function(){
      var icon_text=$(this).php();
      $(".dropdown-toggle").php(icon_text);
    })
  })  